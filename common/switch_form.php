<script>
    $("#work").change(function () {
        if ($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный") {
            $("#work_name").addClass("valid");
            $("#work_name").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_name").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_name_label").removeClass("label_er").addClass("label_true");
            $("#work_name").removeClass("er");
            $("#work_namestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_occupation").addClass("valid");
            $("#work_occupation").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_occupation").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_occupation_label").removeClass("label_er").addClass("label_true");
            $("#work_occupation").removeClass("er");
            $("#work_occupationstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_phone").addClass("valid");
            $("#work_phone").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_phone").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_phone_label").removeClass("label_er").addClass("label_true");
            $("#work_phone").removeClass("er");
            $("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_experience").addClass("valid");
            $("#work_experience").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_experience").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_experience_label").removeClass("label_er").addClass("label_true");
            $("#work_experience").removeClass("er");
            $("#work_experiencestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().addClass("ex-error").removeClass("ex-success");
            $("#work_salary").parent().prev().removeClass("label_true").addClass("label_er");
            $("#work_salary_label").removeClass("label_true").addClass("label_er");
            $("#work_salary").addClass("er");
            $("#work_salary").focus();
            $("#work_salarystatus").addClass("glyphicon-remove");
            $("#work_region").addClass("valid");
            $("#work_region").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_region").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region_label").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_region").removeClass("er");
            $("#work_city").addClass("valid");
            $("#work_city").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_city").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_city_label").removeClass("label_er").addClass("label_true");
            $("#work_city").removeClass("er");
            $("#work_citystatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_street").addClass("valid");
            $("#work_street").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_street").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_street_label").removeClass("label_er").addClass("label_true");
            $("#work_street").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_house").addClass("valid");
            $("#work_house").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_house").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_house_label").removeClass("label_er").addClass("label_true");
            $("#work_house").removeClass("er");
            $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_office").addClass("valid");
            $("#work_office").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_office").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_office_label").removeClass("label_er").addClass("label_true");
            $("#work_office").removeClass("er");
            $("#work_officestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            $("#work_building").addClass("valid");
            $("#work_building").parent().addClass("ex-success").removeClass("ex-error");
            $("#work_building").parent().prev().removeClass("label_er").addClass("label_true");
            $("#work_building_label").removeClass("label_er").addClass("label_true");
            $("#work_building").removeClass("er");
            $("#work_buildingstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
            if ($(this).val().toLowerCase() == "пенсионер")
                $("#work_name").val("пенсионер");
            else $("#work_name").val("безработный");
            if ($(this).val().toLowerCase() == "пенсионер")
                $("#work_occupation").val("пенсионер");
            else $("#work_occupation").val("безработный");
            var teemp = $("#phone").val();
            $("#work_phone").val(teemp);
            $("#work_experience").val(100);
            $("#work_salary").val("");
            var teemp2 = Number($("#region").find(":selected").index());
            $("#work_region option").eq(teemp2).prop("selected", true);
            var teemp3 = $("#city").val();
            $("#work_city").val(teemp3);
            var teemp4 = $("#street").val();
            $("#work_street").val(teemp4);
            var teemp5 = $("#building").val();
            $("#work_house").val(teemp5);
            var teemp7 = $("#building").val();
            $("#work_building").val(teemp7);
            var teemp6 = $("#flat").val();
            $("#work_office").val(teemp6);
        } else {
            $("#work_name").val("");
            $("#work_name").removeClass("valid");
            $("#work_name").parent().removeClass("ex-success");
            $("#work_name").parent().prev().removeClass("label_true");
            $("#work_name_label").removeClass("label_true");
            $("#work_namestatus").removeClass("glyphicon-ok");
            $("#work_occupation").val("");
            $("#work_occupation").removeClass("valid");
            $("#work_occupation").parent().removeClass("ex-success");
            $("#work_occupation").parent().prev().removeClass("label_true");
            $("#work_occupation_label").removeClass("label_true");
            $("#work_occupationstatus").removeClass("glyphicon-ok");
            $("#work_phone").val("");
            $("#work_phone").removeClass("valid");
            $("#work_phone").parent().removeClass("ex-success");
            $("#work_phone").parent().prev().removeClass("label_true");
            $("#work_phone_label").removeClass("label_true");
            $("#work_phonestatus").removeClass("glyphicon-ok");
            $("#work_experience").val("");
            $("#work_experience").removeClass("valid");
            $("#work_experience").parent().removeClass("ex-success");
            $("#work_experience").parent().prev().removeClass("label_true");
            $("#work_experience_label").removeClass("label_true");
            $("#work_experiencestatus").removeClass("glyphicon-ok");
            $("#work_salary").val("");
            $("#work_salary").removeClass("valid");
            $("#work_salary").parent().removeClass("ex-success");
            $("#work_salary").parent().prev().removeClass("label_true");
            $("#work_salary_label").removeClass("label_true");
            $("#work_salarystatus").removeClass("glyphicon-ok");
            $("#work_region").removeClass("valid");
            $("#work_region").parent().removeClass("ex-success");
            $("#work_region").parent().prev().removeClass("label_true");
            $("#work_region_label").removeClass("label_true");
            $("#work_city").val("");
            $("#work_city").removeClass("valid");
            $("#work_city").parent().removeClass("ex-success");
            $("#work_city").parent().prev().removeClass("label_true");
            $("#work_city_label").removeClass("label_true");
            $("#work_citystatus").removeClass("glyphicon-ok");
            $("#work_street").val("");
            $("#work_street").removeClass("valid");
            $("#work_street").parent().removeClass("ex-success");
            $("#work_street").parent().prev().removeClass("label_true");
            $("#work_street_label").removeClass("label_true");
            $("#work_streetstatus").removeClass("glyphicon-ok");
            $("#work_house").val("");
            $("#work_house").removeClass("valid");
            $("#work_house").parent().removeClass("ex-success");
            $("#work_house").parent().prev().removeClass("label_true");
            $("#work_house_label").removeClass("label_true");
            $("#work_housestatus").removeClass("glyphicon-ok");
            $("#work_office").val("");
            $("#work_office").removeClass("valid");
            $("#work_office").parent().removeClass("ex-success");
            $("#work_office").parent().prev().removeClass("label_true");
            $("#work_office_label").removeClass("label_true");
            $("#work_officestatus").removeClass("glyphicon-ok");
            $("#work_building").val("");
            $("#work_building").removeClass("valid");
            $("#work_building").parent().removeClass("ex-success");
            $("#work_building").parent().prev().removeClass("label_true");
            $("#work_building_label").removeClass("label_true");
            $("#work_buildingstatus").removeClass("glyphicon-ok");
            $("#work_name").val("");
            $("#work_occupation").val("");
            $("#work_phone").val("");
            $("#work_experience").val("");
            $("#work_salary").val("");
            $("#work_region option").eq(0, true).prop("selected", true);
            $("#work_city").val("");
            $("#work_street").val("");
            $("#work_house").val("");
            $("#work_building").val("");
            $("#work_office").val("");
        }
    }); 
</script>