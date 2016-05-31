<h1>Please login</h1>
<p><?=$this->__data?></p>
<?php

echo $this->displayForm(  'POST' , 'http://localhost/MVC/login/auth',

        array(
     
            0 => [ 'text', 'username' ],
            1 => [ 'password', 'password' ],
            2 => [ 'submit', 'submit', 'submit' ],
        
        ));
        
      ?>