<?php

/*----------------------------------------------------*/
// Define environment type
/*----------------------------------------------------*/
return function(){
    if( getenv('DOKKU_ROOT') !== false ) {
        return 'production';
    }

    return 'local';
};

