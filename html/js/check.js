function ValidateValue(textbox) {

    var IllegalString = "$,#,@,*,(,) ,! ,~,+,=,%,\,/,? ,<,>,; ,: ,\",\',|";
    var textboxvalue  = textbox.value;
    var index = textboxvalue.length - 1;
    var s     = textbox.value.charAt(index);

    if (IllegalString.indexOf(s) >= 0) {
    s = textboxvalue.substring(0, index);

    textbox.value = s;
    }
}
function validateForm() {

            var x = document.forms["registerForm"]["password"].value;
            var y = document.forms["registerForm"]["password_check"].value;

            if(x.length<6){
                alert("密碼長度不足6位");
                return false;
            }
            if(x.length>10){
                alert("密碼請在10位內");
                return false;
            }
            if (x != y) {
                alert("請確認密碼是否輸入正確");
                return false;
            }
        }