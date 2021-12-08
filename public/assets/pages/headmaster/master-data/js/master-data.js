$(document).ready(function () {
    setTimeout(() => {
        table($('#records').attr('data-url'), function(result) {
            displayTableRows(result, $('#records').attr('data-role'));
        });
    }, 200);
});

function displayTableRows(result, role){
    role = role ? role : 'siswa'; 

    var html = '';

    if (role == 'guru') {
        $.each(result.data, function (key, val) { 
            var isActive = val.is_activated ? 'ACTIVE' : 'INACTIVE';
            var badge    = val.is_activated ? 'success': 'warning';
    
            html += 
            '<tr>\
                <td> <span class="js-lists-values-employee-name">' + val.name + '</span> </td>\
                <td>' + val.nip + '</td>\
                <td>' + val.subject.name + '</td>\
                <td>' + val.email + '</td>\
                <td><span class="badge badge-' + badge + '">' + isActive + '</span></td>\
                <td>\
                    <a href="' + currentUrl + '/edit/' + val.idx + '" class="text-muted btn-action btn btn-primary btn-edit"><i class="material-icons">edit</i></a>\
                    <a href="#" class="text-muted btn-action btn btn-danger btn-delete" data-id="' + val.idx + '"><i class="material-icons">delete</i></a>\
                </td>\
            </tr>';
        });
    } else {
        $.each(result.data, function (key, val) { 
            var isActive = val.is_activated ? 'ACTIVE' : 'INACTIVE';
            var badge    = val.is_activated ? 'success': 'warning';
    
            html += 
            '<tr>\
                <td> <span class="js-lists-values-employee-name">' + val.name + '</span> </td>\
                <td>' + val.nis + '</td>\
                <td>' + val.nisn + '</td>\
                <td>' + val.email + '</td>\
                <td>' + val.class_name + '</td>\
                <td><span class="badge badge-' + badge + '">' + isActive + '</span></td>\
                <td>\
                    <a href="' + currentUrl + '/edit/' + val.idx + '" class="text-muted btn-action btn btn-primary btn-edit"><i class="material-icons">edit</i></a>\
                    <a href="#" class="text-muted btn-action btn btn-danger btn-delete" data-id="' + val.idx + '"><i class="material-icons">delete</i></a>\
                </td>\
            </tr>';
        });
    }
    
    $('.list').html(html);

    generatePagination(result.pagination);

    $('.pagination').removeClass('loader');
}