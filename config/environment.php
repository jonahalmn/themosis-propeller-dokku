<?php

/*----------------------------------------------------*/
// Define environment type
/*----------------------------------------------------*/
return function(){
    if( getenv('DOKKU_APP_NAME' !== false) ) {
        return 'production';
    }

    return 'local';
};

