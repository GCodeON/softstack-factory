$( document ).ready(function() {
    function isUndefined (value) {
        return typeof value === 'undefined';
    }

    function outputLocationData (value) {
        if (!isUndefined(value)) {
            return '<li>' + value + '</li>';
        }
    }

    var selectorFunction = function(res) {
        $('#selectMe').on('change', function(e) {
            $('.locations').empty();

            var county = res.counties[$(this).val()],
                locations = county.locations.length;

            for(var i = 0; i < locations; i++) {
                var $li = $("<li>").addClass("outer-li"),
                    $ul = $("<ul>"),
                    $liName = outputLocationData(county.locations[i].name),
                    $liAddress1 = outputLocationData(county.locations[i].address1),
                    $liAddress2 = outputLocationData(county.locations[i].address2),
                    $liPhone = outputLocationData(county.locations[i].phone),
                    $liContact = outputLocationData(county.locations[i].contact),
                    $liEmail = outputLocationData(county.locations[i].email);

                $ul.append([$liName, $liAddress1, $liAddress2, $liPhone, $liContact, $liEmail]);
                $li.append($ul);
                $('.locations').append($li).hide().fadeIn(800);;
            }
        });
    };

    $.get('/api/cms/find-your-coalition.json', function() {
    }).done( selectorFunction);
});

