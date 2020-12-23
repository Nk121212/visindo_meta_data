<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function activity(){

		$this->load->model('m_crud');

		header('content-type:application/json');
    
        $activity_count = $this->m_crud->total_record('vmd_activity');
        $total_activity = count($activity_count->result());

        $offset = $this->input->post('start') ? $this->input->post('start') : 0;

        $activity_paging = $this->m_crud->total_record_paging('vmd_activity', $offset, '10');

        $data = array(
            'response_real'=>$activity_paging->result(),
            'recordsTotal' => $total_activity,
            'recordsFiltered' => $total_activity,
            'data' => array()
        );

        $i=1;
        foreach($activity_paging->result() as $dt_act){
            $data['data'][] = array(
                'id' => $dt_act->id,
                'no'=>$i, 
                'image' => '<img src="'.base_url().$dt_act->image.'" height="100" width="100"></img>', 
                'title'=>$dt_act->title, 
                'desc'=>$dt_act->desc, 
                'action'=>'
                	<a class="btn btn-sm btn-warning text-white btn-ajax-resp" href="'.base_url().'main/modal_edit_activity/'.$dt_act->id.'" data-toggle="modal"><i class="icofont-edit"></i></a>
                	<a class="btn btn-sm btn-danger text-white del" id-activity="'.$dt_act->id.'"><i class="icofont-delete"></i></a>
                '
            );
            $i++;
        }

        echo json_encode($data, JSON_PRETTY_PRINT);

	}

	public function team(){

		$this->load->model('m_crud');

		header('content-type:application/json');
    
        $team_count = $this->m_crud->total_record('vmd_team');
        $total_team = count($team_count->result());

        $offset = $this->input->post('start') ? $this->input->post('start') : 0;

        $team_paging = $this->m_crud->total_record_paging('vmd_team', $offset, '10');

        $data = array(
            'response_real'=>$team_paging->result(),
            'recordsTotal' => $total_team,
            'recordsFiltered' => $total_team,
            'data' => array()
        );

        $i=1;
        foreach($team_paging->result() as $dt_team){
            $data['data'][] = array(
                'id' => $dt_team->id,
                'no'=>$i, 
                'nama'=>$dt_team->nama, 
                'image' => '<img src="'.base_url().$dt_team->image.'" height="100" width="100"></img>',
                'action'=>'
                	<a class="btn btn-sm btn-warning text-white btn-ajax-resp" href="'.base_url().'main/modal_edit_team/'.$dt_team->id.'" data-toggle="modal"><i class="icofont-edit"></i></a>
                	<a class="btn btn-sm btn-danger text-white del" id-team="'.$dt_team->id.'"><i class="icofont-delete"></i></a>
                '
            );
            $i++;
        }

        echo json_encode($data, JSON_PRETTY_PRINT);

	}

}

?>