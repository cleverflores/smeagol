<?php

namespace Admin\Model;

use Smeagol\Model\NodeTable;
use Zend\Db\TableGateway\TableGateway;
// Class Select
use Zend\Db\Sql\Select;

class Page extends NodeTable {

    public function __construct(TableGateway $tableGateway) {
        parent::__construct($tableGateway);
    }

    public function fetchAllPages() {
        // Realizando un select para obetner los nodos de tipo página
        $resultSet = $this->tableGateway->select(function (Select $select) {
            $select->where->equalTo('node_type_id', 1);
            $select->order('id DESC');
        });
        return $resultSet;
    }

    public function getPage($id) {
        return $this->getNode($id);
    }

    public function getPageByIdentifier($identifier) {
        $rowset = $this->tableGateway->select(array('url' => $identifier));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $identifier");
        }
        return $row;
    }

    public function savePage($page) {
       $this->saveNode($page);
    }

    public function deletePage($id) {
        $this->deleteNode($id);
    }
}
