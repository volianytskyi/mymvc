<?php

class ResellerView
{
  public function renderList()
  {
    echo "list all resellers";
  }

  public function renderReseller($id = null)
  {
    if(empty($id))
    echo "new reseller";
    else echo "reseller $id";
  }
}

 ?>
