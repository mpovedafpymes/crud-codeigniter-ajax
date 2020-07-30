<?php

namespace App\Controllers\Inventory;

use App\Controllers\BaseController;
use App\Models\inventory\WarehousesModel;
use App\Models\inventory\RacksModel;
use App\Models\inventory\SectionsModel;
use App\Models\inventory\DivisionsModel;

class Settings extends BaseController
{	
	/**
	 * index
	 * view settings
	 * 
	 * @return void
	 */
	public function index()
	{
		helper('form');
		$racksModel = new RacksModel();
		$sectionsModel = new SectionsModel();
		$divisionsModel = new DivisionsModel();

		$service = \Config\Services::request();

		$data = [
			'nav_module'		=> $service->uri->getSegment(1),
			'nav_section'		=> $service->uri->getSegment(2),
			'racks'				=> $racksModel->getAllRacks(),
			'sections'			=> $sectionsModel->getAllSections(),
			'divisions'			=> $divisionsModel->getAllDivisions(),
			'attributes_label'	=> ['class' => 'col-sm-4 control-label text-sm-right pt-2'],
			'attributes_text'	=> ['class' => 'form-control'],

		];

		return view('inventory/settings_view', $data);
	}


	/**
	 * getWarehouse
	 * ajax warehouse
	 *
	 * @return void
	 */
	public function getWarehouse()
	{
		$warehousesModel = new WarehousesModel();

		$warehouses = $warehousesModel->getWarehouses();

		if (!empty($warehouses) && is_array($warehouses)) :

			foreach ($warehouses as $warehouse) {
				$result[] = [
					$warehouse['id_warehouse'],
					$warehouse['warehouse'],
					$warehouse['warehouse_type'] == 1 ? 'Principal' : 'Secundario',
					$warehouse['state'] ? 'Activo' : 'Inactivo',
					'<a href="javascript:void(0)"  onclick="edit_warehouse(' . "'" . $warehouse['id_warehouse'] . "'" . ')"><i class="fa fa-pencil-alt"></i></a>',
				];
			}
			
		else :
			$result = [];

		endif;

		$warehouses = [
			'data' => $result
		];

		echo json_encode($warehouses);
	}

	/**
	 * addWarehouse
	 * validated and create/update warehouse
	 *
	 * @return void
	 */
	public function addWarehouse()
	{
		if ($this->request->isAJAX()) :


			helper(['form', 'url']);
			$warehousesModel = new WarehousesModel();


			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([
				'warehouse' => 'required|max_length[5]',
			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				echo $validation->getError();
			else :
				$warehousesModel->save([
					'id_warehouse'	=> $this->request->getVar('id_warehouse'),
					'warehouse'		=> ucfirst($this->request->getVar('warehouse')),
					'warehouse_type' => $this->request->getVar('warehouse_type'),
					'state'			=> $this->request->getVar('state'),
				]);
				echo "Success";
			endif;

		else :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		endif;
	}
	
	/**
	 * editWarehouse
	 *
	 * @param  mixed $id
	 * @return void
	 */
	public function editWarehouse($id = null)
	{
		if (!$this->request->isAJAX()) :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		else:
			$warehousesModel = new WarehousesModel();

			$data['warehouses'] = $warehousesModel->getWarehouses($id);

			$data = [
				'warehouse' => $data['warehouses']['warehouse'],
				'warehouse_type' => $data['warehouses']['warehouse_type'],
				'state' 	=> $data['warehouses']['state']
			];
	
			echo json_encode($data);
		endif;
	}
	
	/**
	 * deleteWarehouse
	 *
	 * @param  mixed $id
	 * @return void
	 */
	/*public function deleteWarehouse($id = null){

		$warehousesModel = new WarehousesModel();
		$warehousesModel->delete($id);


	}*/
}
