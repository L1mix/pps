var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = 0+panel.scrollHeight + "vh";
    }
  });
}

    let value1 = 0;
    let value2 = 0;
    let value3 = 0;
    let value4 = 0;
    let count = 0;
    let name_id;
    $("select").change(function() {
        let name = "#" + $(this).attr("id");
        $(name).next().removeAttr("disabled");
    });

    function schet(c, n, value) {
        if(value<0){
            value=0;
        }
        if ($(n).val().length === 0) {
            $(n).next().attr("disabled", "");
            if(value !=0 || value>0){
                value -= c * Number($(n).prev().val());
                $(name_id).val(value);
            }
        } else {
            value += c * Number($(n).prev().val());

            $(name_id).val(value);
        }

    };
    


    $("input[type='checkbox']").change(function() {
        let name = "#" + $(this).attr("id");
        let name_class = "." + $(this).parent().parent().parent().parent().attr("class");
        console.log(name_class);
        switch (name_class) {
            case '.panel 1': {
                name_id = "#puk1";
                if ($(this).prop('checked')) {
                    $(name).next().removeAttr("disabled");
                } else {
                    $(this).next().attr("disabled", "");
                    if(value1 !=0|| value1>0){
                        value1 -= Number($(this).val());
                        $(name_id).val(value1);
                    }
                }
            }
            break;
            case '.panel 2': {
                name_id = "#puk2";
                if ($(this).prop('checked')) {
                    $(name).next().removeAttr("disabled");
                } else {
                    $(this).next().attr("disabled", "");
                    if(value2 !=0|| value2>0){
                        value2 -= Number($(this).val());
                        $(name_id).val(value2);
                    }
                }
            }
            break;
            case '.panel 3': {
                name_id = "#puk3";
                if ($(this).prop('checked')) {
                    $(name).next().removeAttr("disabled");
                } else {
                    $(this).next().attr("disabled", "");
                    if(value3 !=0|| value3>0){
                        value3 -= Number($(this).val());
                        $(name_id).val(value3);
                    }
                }
            }
            break;
            case '.panel 4': {
                name_id = "#puk4";
                if ($(this).prop('checked')) {
                    $(name).next().removeAttr("disabled");
                } else {
                    $(this).next().attr("disabled", "");
                    if(value4 !=0|| value4>0){
                        value4 -= Number($(this).val());
                        $(name_id).val(value4);
                    }
                }
            }
            break;
            default:
                break;
        }
        

    });
    var max_chars = 1;
    let buff;
    $("input[type='number']").change(function() {
        if ($(this).val().length >= max_chars) {
            $(this).val($(this).val().substr(0, max_chars));
        }
        let name = "#" + $(this).attr("id");
        $(name).next().removeAttr("disabled");
        count = Number($(name).val());
        if (count > 0) {
            buff = count;
        }
        switch (name_id) {
            case '#puk1': 
                schet(count, name, value1);
                break;
            case '#puk2':
                schet(count, name, value2);
                break;
            case '#puk3':
                schet(count, name, value3);
                break;
            case '#puk4':
                schet(count, name, value4);
                break;
        }

    });