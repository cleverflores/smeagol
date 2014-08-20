<?php

namespace Smeagol\Model;

use Zend\Db\TableGateway\TableGateway;
// Class Select
use Zend\Db\Sql\Select;

class NodeTable {

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getNoticiasFront() {
        // Realizando un select para obetner los nodos de tipo noticia
        // los tres últimos para la portada
        $resultSet = $this->tableGateway->select(function (Select $select) {
            $select->where->equalTo('node_type_id', 2);
            $select->order('id DESC')->limit(3);
        });
        return $resultSet;
    }

    public function getNode($id) {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function getNodeByUrl($url) {
        $rowset = $this->tableGateway->select(array('url' => $url));
        $row = $rowset->current();
        if (!$row) {
            return array();
        }
        return $row;
    }

    public function saveNode($node) {
        $data = array(
            'content' => $node->content,
            'title' => $node->title,
            'url' => $node->url,
            'node_type_id' => $node->node_type_id,
            'user_id' => $node->user_id,
            'created' => $node->created,
            'modified' => $node->modified,
        );

        $id = (int) $node->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getPage($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Node does not exist');
            }
        }
    }

    public function deleteNode($id) {
        $this->tableGateway->delete(array('id' => $id));
    }

}
