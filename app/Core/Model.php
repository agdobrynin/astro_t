<?php
namespace Core;

class Model extends Db{
    /**
     * Имя таблицы Модели
     * @var string$$table
     */
    protected $table;
    /**
     * Поля таблицы Модели
     * @var string $fields
     */
    protected $fields;
    /**
     * id - первичный ключ таблицы Модели
     * @var string $id
     */
    protected $id="id";

    public function __construct() {

        if (empty($this->table)){
            $Model = strrchr(get_class($this), "\\");
            if( $Model === false ){
                $this->table = get_class($this);
            }else{
                $this->table = substr($Model, 1);
            }
        }

        if (empty($this->fields)) {
            $this->fields = $this->getFields( $this->table );
        }

    }

    public function select($orderby = 'id DESC', $where = '', $cols = '*', $limit = '') {

        if (!empty($this->id) && empty($where)) $where .= "id = $this->id";

        return parent::select($this->table, $orderby, $where, $cols, $limit);

    }

    function save($data) {

        if (!is_array($data))
            return false;

        for ($i=0; $i<count($this->fields); $i++) {
            $set[$this->fields[$i]] = !empty($data[$this->fields[$i]]) ? $data[$this->fields[$i]] : '';
        }

        if (empty($this->id))
            return $this->insert($this->table, $set);
        else {
            foreach ($set as $key => $val) {
                if (empty($set[$key]) || $set[$key] == '')
                    unset($set[$key]);
            }
            return $this->update($this->table, $set, "id = '$this->id'");
        }

    }

    function all($orderby = 'id DESC', $where = '', $cols = '*', $limit = '') {

        $orderby = (!empty($orderby)) ? $orderby : 'id DESC';
        $where = (!empty($where)) ? $where : '';
        $cols = (!empty($cols)) ? $cols : '*';
        $limit = (!empty($limit)) ? $limit : '';

        $this->select($orderby, $where, $cols, $limit);
        return $this->get();

    }


    function find($orderby = 'id DESC', $where = '', $cols = '*', $limit = '1') {

        $orderby = (!empty($orderby)) ? $orderby : 'id DESC';
        $where = (!empty($where)) ? $where : '';
        if (!empty($this->id) && empty($where)) $where .= "id = $this->id";
        $cols = (!empty($cols)) ? $cols : '*';
        $limit = (!empty($limit)) ? $limit : '';

        $this->select($orderby, $where, $cols, $limit);
    }

    function delete($where) {

        if (!empty($this->id) && empty($where)) $where .= "id =" $this->id;
        return parent::delete($this->table, $where);

    }
}
