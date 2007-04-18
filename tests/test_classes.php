<?php
ezcTestRunner::addFileToFilter( __FILE__ );

class testDelayedInitDatabaseInstance
{
    static function configureObject( $identifier )
    {
        if ( $identifier !== false )
        {
            switch ( $identifier )
            {
                case 'delayed1':
                    return ezcDbFactory::create( 'sqlite://:memory:' );
                  
            }
        }
    }
}
?>
