  <?php

  class M_admin extends CI_Model
  {
    function editBio($biodata)
    {
      $pdo_query = "UPDATE biodata
                  SET name = :name,
                  phone_number = :phone_number,
                  alamat = :alamat
                  WHERE email = :email";

      $pdo_stmt = $this->db->conn_id->prepare($pdo_query);
      $pdo_stmt->execute($biodata);
      return $pdo_stmt->rowCount();
    }
  }
