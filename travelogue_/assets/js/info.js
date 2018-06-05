// Register
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});

//validasi
function Validate() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password_confirmation").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}

function cekPassword() {
    var password = document.getElementById("password").value;
    var newpassword = document.getElementById("newpassword").value;
    var password_confirmation = document.getElementById("password_confirmation").value;
    if (newpassword != password_confirmation) {
        alert("Passwords harus sama!");
        return false;
    }
    else if(password == md5(newpassword)){
        alert("Passwords harus beda dengan password lama!");
        return false;
    }
    else {
        alert("Password berhasil diubah.");
        return true;
    }

    return true;
}

function konfirmasi(){
    var tanya = confirm("Anda Yakin Akan Menghapus Data ?");
    if (tanya == true){
        return true;
    }
    else{
        return false;
    }
}


