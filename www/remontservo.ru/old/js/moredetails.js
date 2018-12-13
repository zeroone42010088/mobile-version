 $(document).ready(function() {
            $(".ulSport").hide();
            $(".ulSport li:odd").css("background-color", "#efefef");
            $(".index_detailsCards_box").click(function() {
                $(this).next().slideToggle();
                var text = $("span", this).text();
                $("span", this).text(text != "&#9660;" ? "" : "&#9650;")
            });
        });