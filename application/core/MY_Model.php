<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	public $read_db;
	public $write_db;
	
    public function __construct()
    {
        parent::__construct();
        $numDB = ($this->config->item('number_databases')) ? $this->config->item('number_databases') : 1;
		if($numDB > 1) {
			$this->write_db = $this->load->database('write', TRUE);
			$this->read_db = $this->load->database('read', TRUE);
		} else {
			$this->write_db = $this->read_db = $this->load->database('write', TRUE);
		}
    }
    
/*---------------------- Base Database Function ----------------------*/ 

    // Insert into table
    public function addData($data)
    {
        $this->write_db->insert($data['table'], $data['data']);
        return $this->write_db->insert_id();
    }
    
    // Update data to table
    public function updateData($data)
    {
        if (!empty($data['where'])) {
       		$this->write_db->where($data['where']);
        }
        $query = $this->write_db->update($data['table'], $data['data']);
        return true;
    }

    // Delete record from table
    public function deleteData($data)
    {
    	if (!empty($data['where'])) {
       		$this->write_db->where($data['where']);
        }
        if (!empty($data['where_in'])) {
       		$this->write_db->where_in($data['where_in']);
        }
    	$this->write_db->delete($data['table']);
    	return true;
    }
    
    // Truncate record from table
    public function truncateTable($data)
    {
    	$this->write_db->truncate($data['table']);
    	return true;
    }

    // Check whether a value has duplicates in the database
    public function hasDuplicate($data)
    {
        $this->read_db->where($data['where']);
        $query = $this->read_db->get($data['table']);
		$count = $this->read_db->affected_rows();
		
        if ($count > 0) {
            return true;
        }
        else {
            return false;
        }
    }

	public function getData($data)
    {
        if (!empty($data['select'])) {
			$this->read_db->select($data['select']);
        }
		
        if (!empty($data['where'])) {
       		$this->read_db->where($data['where']);
        }
        
       // print_r($data['where_in']['key']);
        
		if (!empty($data['where_in'])) {
			foreach ($data['where_in'] as $where_in) {
				$this->read_db->where_in($where_in['key'], $where_in['value']);
			}
		}
		
		if (!empty($data['join'])) {
			foreach ($data['join'] as $join) {
				$this->read_db->join($join['table'], $join['field'], 'left');
			}
        }
		
        if (!empty($data['offset']) && !empty($data['limit'])) {        
        	$this->read_db->limit($data['limit'], $data['offset']);
        } else if (!empty($data['limit'])) {
        	$this->read_db->limit($data['limit']);
        }
		
        if (!empty($data['order'])) {
			$this->read_db->order_by($data['order']);
		}
		
		if (!empty($data['group_by'])) {
			$this->read_db->group_by($data['group_by']);
		}
        
        $query = $this->read_db->get($data['table']);
        
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        return null;
    }
    
    public function getOneData($data)
    {
        if (!empty($data['select'])) {
			$this->read_db->select($data['select']);
		}
		
        if (!empty($data['where'])) {
        	$this->read_db->where($data['where']);
        }
        if (!empty($data['where_in'])) {
        	$this->read_db->where_in($data['where_in']);
        }
        
		if (!empty($data['join'])) {
			foreach ($data['join'] as $join) {
				$this->read_db->join($join['table'], $join['field'], 'left');
			}
		}
		if (!empty($data['order'])) {
			$this->read_db->order_by($data['order']);
		}
		if (!empty($data['group_by'])) {
			$this->read_db->group_by($data['group_by']);
        }
		
        $query = $this->read_db->get($data['table']);
        if($query->num_rows() > 0)
        {
            return $query->row();
        }
        return null;
    }
    
    // Return all records in the table
    public function getAll($data)
    {
    	if (!empty($data['order'])) {
			$this->read_db->order_by($data['order']);
		}
        $query = $this->read_db->get($data['table']);
        
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        return null;
    }
    
    public function getDataArray($data)
    {
        if (!empty($data['select'])) {
			$this->read_db->select($data['select']);
		}
        
        if (!empty($data['where'])) {
       		$this->read_db->where($data['where']);
        }
        if (!empty($data['where_in'])) {
       		$this->read_db->where_in($data['where_in']);
        }
		if (!empty($data['join'])) {
			foreach ($data['join'] as $join) {
				$this->read_db->join($join['table'], $join['field'], 'left');
			}
		}
        
        if (!empty($data['offset']) && !empty($data['limit'])) {        
        	$this->read_db->limit($data['limit'], $data['offset']);
        } else if (!empty($data['limit'])) {
        	$this->read_db->limit($data['limit']);
        }
        
		if (!empty($data['order'])) {
			$this->read_db->order_by($data['order']);
		}
		if (!empty($data['group_by'])) {
			$this->read_db->group_by($data['group_by']);
        }
		
        $query = $this->read_db->get($data['table']);
        
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return null;
    }
    
    public function getOneDataArray($data)
    {
        if (!empty($data['select'])) {
			$this->read_db->select($data['select']);
		}
        if (!empty($data['where'])) {
        	$this->read_db->where($data['where']);
        }
        if (!empty($data['where_in'])) {
        	$this->read_db->where_in($data['where_in']);
        }
        if (!empty($data['join'])) {
			foreach ($data['join'] as $join) {
				$this->read_db->join($join['table'], $join['field'], 'left');
			}
		}
		if (!empty($data['order'])) {
			$this->read_db->order_by($data['order']);
		}
		
		if (!empty($data['group_by'])) {
			$this->read_db->group_by($data['group_by']);
        }
		
        $query = $this->read_db->get($data['table']);
        if($query->num_rows() > 0)
        {
            return $query->row_array();
        }
        return null;
    }
    
    // Return all records in the table
    public function getAllArray($data)
    {
    	if (!empty($data['group_by'])) {
			$this->read_db->order_by($data['group_by']);
		}
        $query = $this->read_db->get($data['table']);
        
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        return null;
    }
    
    public function countData($data) {
    	if (!empty($data['select'])) {
			$this->read_db->select($data['select']);
		}
        if (!empty($data['where'])) {
       		$this->read_db->where($data['where']);
        }
        if (!empty($data['where_in'])) {
       		$this->read_db->where_in($data['where_in']);
        }
		if (!empty($data['join'])) {
			foreach ($data['join'] as $join) {
				$this->read_db->join($join['table'], $join['field'], 'left');
			}
        }
        if (!empty($data['offset']) && !empty($data['limit'])) {
        
        	$this->read_db->limit($data['limit'], $data['offset']);
        } else if (!empty($data['limit'])) {
        	$this->read_db->limit($data['limit']);
        }
        if (!empty($data['order'])) {
			$this->read_db->order_by($data['order']);
		}
		if (!empty($data['group_by'])) {
			$this->read_db->group_by($data['group_by']);
        }
		
        $query = $this->read_db->get($data['table']);
        
        return $this->read_db->affected_rows();
    }
}