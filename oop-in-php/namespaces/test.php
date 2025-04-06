<?php
    include_once "./services/User.php";
    include_once "./staff/User.php";

    use Services\User AS ServiceUser;
    use Services\Payment AS ServicePayment;
    use Staff\User AS StaffUser;
    ServiceUser::greeting();
    echo "<br>";
    StaffUser::greeting();
    echo "<br>";
    ServicePayment::paymentMethod();
?>