<?php
class Disco extends AppModel
{
	var $name = 'Disco';
	
	var $belongsTo = array('Grupo' =>
			array('className' 	=> 'Grupo',
				'conditions' 	=> '',
				'order' 		=> '',
				'foreignKey' 	=> 'grupo_id'
			)
		);
}
?>