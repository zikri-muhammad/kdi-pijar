//setup before functions
var typingTimer; //timer identifier
var doneTypingInterval = 300; //time in ms (2 seconds)


function table(url, callBack) {
    $('.list').empty();
    $('.pagination').addClass('loader');

    var filter = [];
    var condition = 'equal';

    $.each($('.filter-search'), function (key, val) {
        if (value = $(this).val()) {
            filter.push({
                'field': $(this).attr('name'),
                'condition_type': condition,
                'value': value
            })
        }
    });

    var queryParams = filter.length > 0 ? serialize(filter) : '';

    $.ajax({
        url: url + queryParams,
        type: "GET",
        dataType: 'json',
        success: function (ret) {
            callBack(ret);
        }
    });
}

serialize = function (obj) {
    var str = [];

    $.each(obj, function (index, value) {
        str.push(encodeURIComponent(value.field) + "=" + encodeURIComponent(value.value));
    });

    return '?' + str.join("&");
}

function generatePagination(data) {
    if (typeof (data) != 'undefined') {
        var html = '',
            currentPage = data.current_page,
            lastPage = data.last_page,
            firstPageUrl = data.first_page_url,
            lastPageUrl = data.last_page_url,
            perPage = data.per_page,
            total = data.total;

        if (data.last_page != 1) {
            if (currentPage != 1) {
                param = firstPageUrl.slice(firstPageUrl.lastIndexOf('?') + 0);
                urlRecordFirst = $('#records').attr('data-url') + param;
                statusFirstPage = '';
            } else {
                urlRecordFirst = '#';
                statusFirstPage = ' disabled';
            }

            html += '<li class="page-item' + statusFirstPage + '">\
            <a class="page-link"\
                href="' + urlRecordFirst + '"\
                aria-label="Previous">\
                <span aria-hidden="true"\
                        class="material-icons">first_page</span>\
                <span class="sr-only">First</span>\
            </a>\
        </li>';

            $.each(data.links, function (key, val) {
                var url = val.url ? val.url : '#';
                var status = val.url ? '' : ' disabled';
                var active = val.active ? ' active' : '';
                var param = url.slice(url.lastIndexOf('?') + 0);
                var urlRecord = $('#records').attr('data-url') + param;

                if (val.label == "pagination.previous") {
                    html += '<li class="page-item' + status + '">\
                <a class="page-link"\
                    href="' + urlRecord + '"\
                    aria-label="Previous">\
                    <span aria-hidden="true"\
                            class="material-icons">chevron_left</span>\
                    <span class="sr-only">Prev</span>\
                </a>\
            </li>';
                } else if (val.label == "pagination.next") {
                    html += '<li class="page-item' + status + '">\
                <a class="page-link"\
                    href="' + urlRecord + '"\
                    aria-label="Next">\
                    <span class="sr-only">Next</span>\
                    <span aria-hidden="true"\
                            class="material-icons">chevron_right</span>\
                </a>\
            </li>';
                } else {
                    html += '<li class="page-item' + active + '">\
                <a class="page-link"\
                    href="' + urlRecord + '"\
                    aria-label="' + val.label + '">\
                    <span>' + val.label + '</span>\
                </a>\
            </li>';
                }
            });

            if (currentPage != lastPage) {
                param = lastPageUrl.slice(lastPageUrl.lastIndexOf('?') + 0);
                urlRecordLast = $('#records').attr('data-url') + param;
                statusLastPage = '';
            } else {
                urlRecordLast = '#';
                statusLastPage = ' disabled';
            }


            html += '<li class="page-item' + statusLastPage + '">\
            <a class="page-link"\
                href="' + urlRecordLast + '"\
                aria-label="Next">\
                <span aria-hidden="true"\
                        class="material-icons">last_page</span>\
                <span class="sr-only">Last</span>\
            </a>\
        </li>';

            $('.pagination').html(html);
        }

    } else {}
}

// Pagination

$(document).on('click', '.page-link', function (e) {
    e.preventDefault();

    $('.pagination').empty();

    table($(this).attr('href'), function (result) {
        displayTableRows(result);
    });
});

// Delete 

$(document).on('click', '.btn-delete', function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    var urlDelete = $('#records').attr('data-url') + '/delete/' + id;

    eModal.confirm('Apakah Anda yakin?', 'Perhatian')
        .then(function () {
            loading();

            $.ajax({
                url: urlDelete,
                type: "DELETE",
                data: '_token=' + $('meta[name="csrf-token"]').attr('content'),
                dataType: 'json',
                error: function (ret) {
                    loadingcomplete();
                },
                success: function (ret) {
                    if (ret.error == 1) {
                        toastr.error(ret.message, 'Oops!', {
                            timeOut: 3000
                        })

                        loadingcomplete();
                    } else {
                        toastr.success(ret.message, 'Suskes!', {
                            timeOut: 2000
                        })

                        table($('#records').attr('data-url'), function (result) {
                            displayTableRows(result);
                        });

                        loadingcomplete();
                    }
                }
            });
        }, function () {});
});


// Filter

$(document).on('change', '.filter-search', function (e) {
    e.preventDefault();

    if (!$(this).hasClass('search-all')) {
        $('.pagination').empty();

        table($('#records').attr('data-url'), function (result) {
            if ($('#records').attr('data-role')) {
                displayTableRows(result, $("#records").attr('data-role'));
            } else {
                displayTableRows(result);
            }
        });
    }

});

$(document).on('keyup, keydown', '.search-all', function (e) {
    clearTimeout(typingTimer);

    if ($('.search-all').val()) {
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
    }
});


//user is "finished typing," do something
function doneTyping() {
    $('.pagination').empty();

    table($('#records').attr('data-url'), function (result) {
        displayTableRows(result);
    });
}
