<?php

/*---------------------------------------------------------------------------*/
/* CORE: iniate database connection */
/*---------------------------------------------------------------------------*/

class Database
{
    private $_dbh;

    // XXX: Following request only suits small tables.
    // ORDER BY RAND() takes time as it needs to first generate random number for each row.
    private $_dbRequest = 'SELECT * FROM vim_commands WHERE difficulty = ? ORDER BY RAND() LIMIT 1';

    public function connect($servername, $database, $username, $password)
    {
        try
        {
            // database handle
            $this->_dbh = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";    DBG
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            exit(1);
        }
    }

    public function fetch_command($commandLevel)
    {
        if (is_null($this->_dbh))
        {
            echo "Connection failed. Database handler is not initialized";
            exit(1);
        }
        else
        {
            // statement handle
            $sth = $this->_dbh->prepare($this->_dbRequest);
            $sth->execute(array($commandLevel));

            $db_row = $sth->fetch();

            // Frees up the connection to server
            $sth->closeCursor();

            return $db_row;
        }
    }
}

?>
