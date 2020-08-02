<?php

namespace App\Controllers\Inventory;

use App\Controllers\BaseController;
use App\Models\inventory\WarehousesModel;
use App\Models\inventory\RacksModel;
use App\Models\inventory\SectionsModel;
use App\Models\inventory\DivisionsModel;
use App\Models\inventory\HousesModel;
use App\Models\inventory\BrandsModel;
use App\Models\inventory\CategoriesModel;

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

		$service = \Config\Services::request();


		$data = [
			'nav_module'		=> $service->uri->getSegment(1),
			'nav_section'		=> $service->uri->getSegment(2),
			'attributes_label'	=> ['class' => 'col-sm-4 control-label text-sm-right pt-2'],
			'attributes_text'	=> ['class' => 'form-control text-capitalize'],
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
					$warehouse['status'] ? 'Activo' : 'Inactivo',
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

			helper(['form']);
			$warehousesModel = new WarehousesModel();

			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([
				'warehouse' => [
					'label' => 'Bodega',
					'rules' => 'required|max_length[5]|is_unique[warehouses.warehouse]',
					'errors' => [
						'required' => 'El campo {field} es obligatorio.',
						'max_length' => 'El campo {field} no puede exceder los {param} caracteres de longitud.',
						'is_unique' => 'El campo {field} debe contener un valor único.'
					],
				]
			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				echo $validation->getError();
			else :
				$warehousesModel->save([
					'id_warehouse'	=> $this->request->getVar('id_warehouse'),
					'warehouse'		=> ucwords(strtolower($this->request->getVar('warehouse'))),
					'warehouse_type' => $this->request->getVar('warehouse_type'),
					'status'			=> $this->request->getVar('status'),
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
		else :
			$warehousesModel = new WarehousesModel();

			$data['warehouses'] = $warehousesModel->getWarehouses($id);

			$data = [
				'warehouse' => $data['warehouses']['warehouse'],
				'warehouse_type' => $data['warehouses']['warehouse_type'],
				'status' 	=> $data['warehouses']['status']
			];

			echo json_encode($data);
		endif;
	}

	/**
	 * getRack
	 * ajax rack
	 *
	 * @return void
	 */
	public function getRack()
	{
		$racksModel = new RacksModel();

		$racks = $racksModel->findAll();

		if (!empty($racks) && is_array($racks)) :

			foreach ($racks as $rack) {
				$result[] = [
					$rack['rack']
				];
			}

		else :
			$result = [];

		endif;

		$racks = [
			'data' => $result
		];

		echo json_encode($racks);
	}

	/**
	 * addRack
	 *validated and create rack

	 * @return void
	 */
	public function addRack()
	{
		if ($this->request->isAJAX()) :

			helper(['form']);
			$racksModel = new RacksModel();

			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([
				'rack' => 'required|numeric|is_unique[racks.rack]',
			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				echo $validation->getError();
			else :
				$racksModel->save(['rack' => $this->request->getVar('rack')]);
				echo "Success";
			endif;

		else :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		endif;
	}

	/**
	 * getSection
	 * ajax section
	 *
	 * @return void
	 */
	public function getSection()
	{
		$sectionsModel = new SectionsModel();

		$sections = $sectionsModel->findAll();

		if (!empty($sections) && is_array($sections)) :

			foreach ($sections as $section) {
				$result[] = [
					$section['section']
				];
			}

		else :
			$result = [];

		endif;

		$sections = [
			'data' => $result
		];

		echo json_encode($sections);
	}

	/**
	 * addSection
	 *validated and create section

	 * @return void
	 */
	public function addSection()
	{
		if ($this->request->isAJAX()) :

			helper(['form', 'url']);
			$sectionsModel = new SectionsModel();

			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([
				'section' => [
					'label' => 'Sección',
					'rules' => 'required|alpha|is_unique[sections.section]',
					'errors' => [
						'required' => 'El campo {field} es obligatorio.',
						'alpha' => 'El campo {field} solo puede contener caracteres alfabéticos.',
						'is_unique' => 'El campo {field} debe contener un valor único.'
					],
				]

			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				echo $validation->getError();
			else :
				$sectionsModel->save(['section' => ucfirst($this->request->getVar('section'))]);
				echo "Success";
			endif;

		else :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		endif;
	}

	/**
	 * getDivision
	 * ajax division
	 *
	 * @return void
	 */
	public function getDivision()
	{
		$divisionsModel = new DivisionsModel();

		$divisions = $divisionsModel->findAll();

		if (!empty($divisions) && is_array($divisions)) :

			foreach ($divisions as $division) {
				$result[] = [
					$division['division']
				];
			}

		else :
			$result = [];

		endif;

		$division = [
			'data' => $result
		];

		echo json_encode($division);
	}

	/**
	 * addDivision
	 *validated and create division

	 * @return void
	 */
	public function addDivision()
	{
		if ($this->request->isAJAX()) :


			helper(['form', 'url']);
			$divisionsModel = new DivisionsModel();


			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([
				'division' => [
					'label' => 'División',
					'rules' => 'required|numeric|is_unique[divisions.division]',
					'errors' => [
						'required' => 'El campo {field} es obligatorio.',
						'numeric' => 'El campo {field} debe contener solo números.',
						'is_unique' => 'El campo {field} debe contener un valor único.'
					],
				]
			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				echo $validation->getError();
			else :
				$divisionsModel->save(['division' => $this->request->getVar('division')]);
				echo "Success";
			endif;

		else :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		endif;
	}

	/**
	 * gethouse
	 * ajax house
	 *
	 * @return void
	 */
	public function gethouse()
	{
		$housesModel = new HousesModel();

		$houses = $housesModel->getHouses();

		if (!empty($houses) && is_array($houses)) :

			foreach ($houses as $house) {
				$result[] = [
					$house['id_house'],
					$house['house'],
					$house['status'] ? 'Activo' : 'Inactivo',
					'<a href="javascript:void(0)"  onclick="edit_house(' . "'" . $house['id_house'] . "'" . ')"><i class="fa fa-pencil-alt"></i></a>',
				];
			}

		else :
			$result = [];

		endif;

		$houses = [
			'data' => $result
		];

		echo json_encode($houses);
	}
	
	/**
	 * getSelectHouse
	 *
	 * @return void
	 */
	public function getSelectHouse()
	{
		$housesModel = new HousesModel();

		// Search term
		$searchTerm = $this->request->getVar('searchTerm');

		// Get users
		$response = $housesModel->selectHouses($searchTerm);

		echo json_encode($response);
	}

	/**
	 * addHouse
	 * validated and create/update house
	 *
	 * @return void
	 */
	public function addHouse()
	{
		if ($this->request->isAJAX()) :

			helper(['form', 'url']);
			$housesModel = new HousesModel();

			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([
				'house' => [
					'label' => 'Casa',
					'rules' => 'required|alpha_numeric_space|min_length[2]|is_unique[houses.house]',
					'errors' => [
						'required' => 'En campo {field} es obligatorio.',
						'alpha_numeric_space' => 'En campo {field} solo puede contener caracteres alfanuméricos y espacios.',
						'min_length' => 'El campo {field} debe tener al menos {param} caracteres de longitud.',
						'is_unique' => 'El campo {field} debe contener un valor único.'
					],
				]
			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				echo $validation->getError();
			else :
				$housesModel->save([
					'id_house'	=> $this->request->getVar('id_house'),
					'house'		=> ucwords(strtolower($this->request->getVar('house'))),
					'status'	=> $this->request->getVar('status'),
				]);
				echo "Success";
			endif;

		else :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		endif;
	}

	/**
	 * editHouse
	 *
	 * @param  mixed $id
	 * @return void
	 */
	public function editHouse($id = null)
	{
		if (!$this->request->isAJAX()) :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		else :
			$housesModel = new HousesModel();

			$data['houses'] = $housesModel->getHouses($id);

			$data = [
				'house' => $data['houses']['house'],
				'status' 	=> $data['houses']['status']
			];

			echo json_encode($data);
		endif;
	}

	/**
	 * getbrand
	 * ajax brand
	 *
	 * @return void
	 */
	public function getbrand()
	{
		$brandsModel = new BrandsModel();
		$housesModel = new HousesModel();

		$result = [];

		$brands = $brandsModel->getBrands();


		if (!empty($brands) && is_array($brands)) :

		foreach ($brands as $brand) {
			$result[] = [
				'dataBrand' => $brand,
				'house' => $housesModel->getHouses($brand['house_id'])
			];
		}

		foreach ($result as $brand) {
			$result_2[] = [
				$brand['dataBrand']['id_brand'],
				$brand['dataBrand']['house_id'],
				$brand['dataBrand']['brand'],
				$brand['house']['house'],
				$brand['dataBrand']['status'] ? 'Activo' : 'Inactivo',
				'<a href="javascript:void(0)"  onclick="edit_brand(' . "'" . $brand['dataBrand']['id_brand'] . "'" . ')"><i class="fa fa-pencil-alt"></i></a>'
			];
		}

		else :
			$result_2 = [];

		endif;

		$brands = [
			'data' => $result_2
		];

		echo json_encode($brands);
	}

	/**
	 * addBrand
	 * validated and create/update brand
	 *
	 * @return void
	 */
	public function addBrand()
	{
		if ($this->request->isAJAX()) :

			helper(['form']);
			$brandsModel = new BrandsModel();

			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([

				'brand' => [
					'label' => 'Marca',
					'rules' => 'required|alpha_numeric|min_length[2]|is_unique[brands.brand]',
					'errors' => [
						'required' => 'En campo {field} es obligatorio.',
						'min_length' => 'El campo {field} debe tener al menos {param} caracteres de longitud.',
						'is_unique' => 'El campo {field} debe contener un valor único.'
					],
				],
				'house_id' => [
					'label' => 'Casa',
					'rules' => 'required',
					'errors' => [
						'required' => 'En campo {field} es obligatorio.',
					],
				],
			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				$errors = $validation->getErrors();
				foreach ($errors as $error) : 
					echo ('<li>'.$error.'</li>');
				endforeach;
				
			else :
				$brandsModel->save([
					'id_brand'	=> $this->request->getVar('id_brand'),
					'brand'		=> ucwords(strtolower($this->request->getVar('brand'))),
					'status'	=> $this->request->getVar('status'),
					'house_id'	=> $this->request->getVar('house_id'),
				]);
				echo "Success";
			endif;

		else :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		endif;
	}

	/**
	 * editBrand
	 *
	 * @param  mixed $id
	 * @return void
	 */
	public function editBrand($id = null)
	{
		if (!$this->request->isAJAX()) :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		else :
			$brandsModel = new BrandsModel();
			$housesModel = new HousesModel();

			$data['brands'] = $brandsModel->getBrands($id);
			
			$data['houses'] = $housesModel->getHouses($data['brands']['house_id']);

			$data = [
				'brand' 	=> $data['brands']['brand'],
				'status' 	=> $data['brands']['status'],
				'house_id' 	=> $data['brands']['house_id'],
				'house' 	=> $data['houses']['house'],
			];

			echo json_encode($data);
		endif;
	}

	/**
	 * getcategory
	 * ajax category
	 *
	 * @return void
	 */
	public function getcategory()
	{
		$categoriesModel = new CategoriesModel();

		$categories = $categoriesModel->getCategories();

		if (!empty($categories) && is_array($categories)) :

			foreach ($categories as $category) {
				$result[] = [
					$category['id_category'],
					$category['category'],
					$category['status'] ? 'Activo' : 'Inactivo',
					'<a href="javascript:void(0)"  onclick="edit_category(' . "'" . $category['id_category'] . "'" . ')"><i class="fa fa-pencil-alt"></i></a>',
				];
			}

		else :
			$result = [];

		endif;

		$categories = [
			'data' => $result
		];

		echo json_encode($categories);
	}

	/**
	 * addCategory
	 * validated and create/update category
	 *
	 * @return void
	 */
	public function addCategory()
	{
		if ($this->request->isAJAX()) :

			helper(['form']);
			$categoriesModel = new CategoriesModel();

			if ($this->request->getMethod() !== 'post') :
				return redirect()->to(base_url('inventory/settings'));
			endif;

			$validate = $this->validate([
				'category' => [
					'label' => 'Categoría',
					'rules' => 'required|alpha_numeric_space|min_length[2]|is_unique[categories.category]',
					'errors' => [
						'required' => 'El campo {field} es obligatorio.',
						'alpha_numeric_space' => 'El campo {field} solo puede contener caracteres alfanuméricos y espacios.',
						'min_length' => 'El campo {field} debe tener al menos {param} caracteres de longitud.',
						'is_unique' => 'El campo {field} debe contener un valor único.'
					],
				]
			]);

			if (!$validate) :
				$validation = $this->validator;
				$data['validation'] = $validation;
				echo $validation->getError();
			else :
				$categoriesModel->save([
					'id_category'	=> $this->request->getVar('id_category'),
					'category'		=> ucwords(strtolower($this->request->getVar('category'))),
					'status'	=> $this->request->getVar('status'),
				]);
				echo "Success";
			endif;

		else :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		endif;
	}

	/**
	 * editCategory
	 *
	 * @param  mixed $id
	 * @return void
	 */
	public function editCategory($id = null)
	{
		if (!$this->request->isAJAX()) :
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		else :
			$categoriesModel = new CategoriesModel();

			$data['categories'] = $categoriesModel->getCategiories($id);

			$data = [
				'category' => $data['categories']['category'],
				'status' 	=> $data['categories']['status']
			];

			echo json_encode($data);
		endif;
	}
}
