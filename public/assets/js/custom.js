$('.selectoption').select2();

$("#calendar").evoCalendar({
    calendarEvents: [{
            id: 'bHay68s', // Event's ID (required)
            name: "New Year", // Event name (required)
            date: "January/1/2021", // Event date (required)
            type: "holiday", // Event type (required)
            everyYear: true // Same event every year (optional)
        },
        {
            id: 'bHay69s', // Event's ID (required)
            name: "Vacation Leave",
            badge: "02/13 - 02/15", // Event badge (optional)
            date: ["February/13/2021", "February/15/2021"], // Date range
            description: "Vacation leave for 3 days.", // Event description (optional)
            type: "event",
            color: "#63d867" // Event custom color (optional)
        },
        {
            id: 'bHay67s', // Event's ID (required)
            name: "Bahasa Indonesia", // Event name (required)
            date: "April/29/2021", // Event date (required)
            type: "event", // Event type (required)
            description: "Pukul 15:00 wib", // Event description (optional)
        },
        {
            id: 'bHay66s', // Event's ID (required)
            name: "Matematika", // Event name (required)
            date: "April/29/2021", // Event date (required)
            type: "event", // Event type (required)
            description: "Pukul 16:30 wib", // Event description (optional)
        },
        {
            id: 'bHay65s', // Event's ID (required)
            name: "Fisika", // Event name (required)
            date: "April/29/2021", // Event date (required)
            type: "event", // Event type (required)
            description: "Pukul 17:00 wib", // Event description (optional)
        },
    ]
});
$("#mycalendar").evoCalendar({
    calendarEvents: [{
            id: 'bHay68s', // Event's ID (required)
            name: "New Year", // Event name (required)
            date: "January/1/2021", // Event date (required)
            type: "holiday", // Event type (required)
            everyYear: true // Same event every year (optional)
        },
        {
            id: 'bHay69s', // Event's ID (required)
            name: "Vacation Leave",
            badge: "02/13 - 02/15", // Event badge (optional)
            date: ["February/13/2021", "February/15/2021"], // Date range
            description: "Vacation leave for 3 days.", // Event description (optional)
            type: "event",
            color: "#63d867" // Event custom color (optional)
        },
        {
            id: 'bHay67s', // Event's ID (required)
            name: "Bahasa Indonesia", // Event name (required)
            date: "May/29/2021", // Event date (required)
            type: "event", // Event type (required)
            description: "Pukul 15:00 wib", // Event description (optional)
        },
        {
            id: 'bHay66s', // Event's ID (required)
            name: "Matematika", // Event name (required)
            date: "May/29/2021", // Event date (required)
            type: "event", // Event type (required)
            description: "Pukul 16:30 wib", // Event description (optional)
        },
        {
            id: 'bHay65s', // Event's ID (required)
            name: "Fisika", // Event name (required)
            date: "May/29/2021", // Event date (required)
            type: "event", // Event type (required)
            description: "Pukul 17:00 wib", // Event description (optional)
        },
    ]
});

$("#addBtn").click(function () {
    $('#calendar').evoCalendar('addCalendarEvent', {
        id: 'kNybja6',
        name: 'Jadwal Baru',
        description: 'Lorem ipsum dolor sit..',
        date: 'May/29/2021',
        type: 'event'
    });
});

$('input[name="rangetime"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
        format: 'MMM/DD/YYYY hh:mm A'
    }
});

$('input[name="datetimes"]').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
        format: 'MMM/DD/YYYY  hh:mm A'
    }
});


$(document).ready(function () {
    $('.sidebar-menu-item').removeClass('active');


    $(function () {
        var CurrentUrl = document.URL;
        var CurrentUrlEnd = CurrentUrl.split('/').filter(Boolean).pop();

        $(".sidebar-menu-button").each(function () {
            var ThisUrl = $(this).attr('href');
            var ThisUrlEnd = ThisUrl.split('/').filter(Boolean).pop();
            if (ThisUrlEnd == CurrentUrlEnd)
                $(this).parent().addClass('active')
        });
    });

    $('#save').click(function () {
        var form_action = '#form-save';

        loading();

        if ($(form_action).parsley().validate()) {
            $.ajax({
                url: $(form_action).attr('action'),
                type: "POST",
                dataType: 'json',
                data: $(form_action).serialize() + '&_token=' + $('meta[name="csrf-token"]').attr('content'),
                error: function (err) {
                    toastr.error('There is an unexpected error', 'Ooops!', {
                        timeOut: 3000
                    })
                    loadingcomplete();
                },
                success: function (ret) {
                    if (ret.error == 1) {
                        toastr.error(ret.message, 'Oops!', {
                            timeOut: 3000
                        })

                        loadingcomplete();
                    } else {
                        toastr.success(ret.message, 'Selamat!', {
                            timeOut: 1500
                        })
                        setTimeout(() => {
                            window.location.href = ret.url_back;
                        }, 1500);
                    }
                }
            });
        } else {
            loadingcomplete();
        }

        return false;
    });
});

function loading() {
    $('.custom-loader').removeClass('hidden');
}

function loadingcomplete() {
    $('.custom-loader').addClass('hidden');
}
