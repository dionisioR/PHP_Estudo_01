<?php

namespace bng\Models;

use bng\Models\BaseModel;

class Agents extends BaseModel
{
    //===============================================
    public function check_login($username, $password)
    {

        // check if the login is valid
        $params = [
            ':username' => $username
        ];

        // check if there is a user in the database
        $this->db_connect();
        $results = $this->query(
            // "Select id, passwrd from agents where AES_ENCRYPT(:username,'MYSQL_AES_KEY') = name", $params
            "Select id, passwrd from agents where :username = name",
            $params
        );

        // if there is no user, return false
        if ($results->affected_rows == 0) {
            return ['status' => false];
        }

        // there is a user whith that name (username)
        // check if the password is correct
        if (!password_verify($password, $results->results[0]->passwrd)) {
            return ['status' => false];
        }

        //login is ok
        return [
            'status' => true,
        ];
    }

    //===============================================
    public function get_user_data($username)
    {
        // get all necessary user data to insert in the session
        $params = [
            ':username' => $username
        ];
        $this->db_connect();
        // $results = $this->query(
        //     "Select id, ".
        //     "AES_DECRYPT(name, '" . MYSQL_AES_KEY . "') as name, ".
        //     "profile " .
        //     "FROM agents " .
        //     "WHERE AES_ENCRYPT(:username, '" . MYSQL_AES_KEY . "') = name",
        //     $params
        // );
        $results = $this->query(
            "Select id, name, profile FROM agents WHERE :username = name",
            $params
        );

        return [
            "status" => "success",
            "data" => $results->results[0]
        ];
    }
    //===============================================
    public function set_user_last_login($id){
        // updates the user's last login
        $params = [
            ':id' => $id
        ];
        $this->db_connect();
        $results = $this->non_query(
            "UPDATE agents SET last_login = NOW() WHERE id = :id",
            $params
        );
        return $results;
    }

    //===============================================
    public function get_agent_clients($id_agent){
        // get all clientes from the agent with the spefified id_agent
        $params = [
            ':id_agent' => $id_agent
        ];
        $this->db_connect();
        $results = $this->query(
            "SELECT " . 
            "id, " .
            "AES_DECRYPT(name, '" . MYSQL_AES_KEY . "') as name, " .
            "gender, " .
            "birthdate, " .
            "AES_DECRYPT(email, '" . MYSQL_AES_KEY . "') as email, " .
            "AES_DECRYPT(phone, '" . MYSQL_AES_KEY . "') as phone, " .
            "interests, " .
            "created_at, " .
            "updated_at, " .
            "FROM persons " .
            "WHERE id_agent = :id_agent",
            "AND deleted_at IS NULL",
            $params
        );

        printData($results);

        return [
            "status" => "success",
            "data" => $results->results
        ];
    }
}
