<?php

/*----------------------------------------------------*/
// Define environment type
/*----------------------------------------------------*/
return function(){
    if( getenv('DOKKU_APP_NAME') ) {
        return 'production';
    }

    return 'local';
};

