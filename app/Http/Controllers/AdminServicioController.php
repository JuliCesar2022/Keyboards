<?php namespace App\Http\Controllers;

	use App\Models\CmsUsers;
    use App\Models\Servicio;
    use App\Models\solicitud;
    use App\Repositories\BotWhatsApp\BotWhatsApp;
    use Session;
	use Request;
	use DB;
	use CRUDBooster;
    use function PHPUnit\Framework\callback;

    class AdminServicioController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "servicio";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Tipo Servicio","name"=>"tipo_servicio"];
			$this->col[] = ["label"=>"Fecha Servicio","name"=>"fecha_servicio"];
			$this->col[] = ["label"=>"Fecha salida","name"=>"fecha_salida"];


			$this->col[] = ["label"=>"Client Id","name"=>"client_id","join"=>"users,name", "callback_php"=> '
			    $row->value= "<a href=\"/admin/users17/detail/". $row->client_id."\"> ".$row->users_name." </a>";
			'];

			$this->col[] = ["label"=>"Equipo Id","name"=>"equipo_id","join"=>"equipos,nombre", "callback_php" => '


                       $row->value= "<a href=\"/admin/equipos/edit/". $row->equipo_id."\"> ".$row->equipos_nombre." </a>";

            '];
			$this->col[] = ["label"=>"Status","name"=>"status"];
			$this->col[] = ["label"=>"Descripcion","name"=>"descripcion"];
			$this->col[] = ["label"=>"Tecnico Id","name"=>"tecnico_id","join"=>"cms_users,name"];
			# END COLUMNS DO NOT REMOVE THIS LINE


            BotWhatsApp::senMessage("3043707188","Hola bb manda foto 😈😈😈");

            # START FORM DO NOT REMOVE THIS LINE
			$this->form = [];


            if( CRUDBooster::myPrivilegeId()  !=  CmsUsers::$TECNICO){

                $this->form[] = ['label'=>'Equipo Id','name'=>'equipo_id','type'=>'hidden','validation'=>'min:1|max:255','width'=>'col-sm-10','value'=>request('equipo')];


			$this->form[] = ['label'=>'Tipo Servicio','name'=>'tipo_servicio','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10',"value"=>request('tipo_servicio'),'dataenum'=>'reparacion;mantenimiento'];

			$this->form[] = ['label'=>'Fecha Servicio','name'=>'fecha_servicio','type'=>'date','validation'=>'required|date','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Client Id',"value"=>request('client_id'),'name'=>'client_id','type'=>'hidden','validation'=>'required|min:1|max:255','width'=>'col-sm-10','datatable'=>'users,name'];
			$this->form[] = ['label'=>'Tecnico Id','name'=>'tecnico_id','type'=>'select2','validation'=>'required|min:1|max:255', "datatable_where" => "cms_users.id_cms_privileges = ".CmsUsers::$TECNICO ,'width'=>'col-sm-10','datatable'=>'cms_users,name'];

            }

                 if( CRUDBooster::myPrivilegeId()  !=  CmsUsers::$ASESOR){

                $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Descomponer la URL en sus componentes
                $parts = parse_url($url);
                $parts = explode("/", $parts["path"]);
                $id_servicio = $parts[count($parts)-1];
                $client_id = Servicio::where("id",$id_servicio)->select("client_id")->first()->client_id;




                $this->form[] = ['label'=>'Status','name'=>'status','type'=>'select2','validation'=>'min:1|max:255','width'=>'col-sm-10',"dataenum"=>'recivido;en proceso;finalizado;cancelado'];
			    $this->form[] = ['label'=>'Fecha salida','name'=>'fecha_salida','type'=>'datetime','validation'=>'date','width'=>'col-sm-10'];
                $this->form[] = ['label'=>'Descripcion','name'=>'descripcion','type'=>'textarea','validation'=>'string|min:5|max:5000','width'=>'col-sm-10'];


            }




			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"Tipo Servicio","name"=>"tipo_servicio","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Fecha Servicio","name"=>"fecha_servicio","type"=>"date","required"=>TRUE,"validation"=>"required|date"];
			//$this->form[] = ["label"=>"Client Id","name"=>"client_id","type"=>"select2","required"=>TRUE,"validation"=>"required|min:1|max:255","datatable"=>"client,id"];
			//$this->form[] = ["label"=>"Equipo Id","name"=>"equipo_id","type"=>"select2","required"=>TRUE,"validation"=>"required|min:1|max:255","datatable"=>"equipo,id"];
			//$this->form[] = ["label"=>"Status","name"=>"status","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Descripcion","name"=>"descripcion","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
			//$this->form[] = ["label"=>"Tecnico Id","name"=>"tecnico_id","type"=>"select2","required"=>TRUE,"validation"=>"required|min:1|max:255","datatable"=>"tecnico,id"];
			# OLD END FORM

			/*
	        | ----------------------------------------------------------------------
	        | Sub Module
	        | ----------------------------------------------------------------------
			| @label          = Label of action
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        |
	        */
	        $this->sub_module = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        |
	        */
	        $this->addaction = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Button Selected
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button
	        | Then about the action, you should code at actionButtonSelected method
	        |
	        */
	        $this->button_selected = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------
	        | @message = Text of message
	        | @type    = warning,success,danger,info
	        |
	        */
	        $this->alert = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add more button to header button
	        | ----------------------------------------------------------------------
	        | @label = Name of button
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        |
	        */
	        $this->index_button = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.
	        |
	        */
	        $this->table_row_color = array();


	        /*
	        | ----------------------------------------------------------------------
	        | You may use this bellow array to add statistic at dashboard
	        | ----------------------------------------------------------------------
	        | @label, @count, @icon, @color
	        |
	        */
	        $this->index_statistic = array();


            if(\crocodicstudio\crudbooster\helpers\CRUDBooster::getCurrentMethod() == "getEdit"  &&  \crocodicstudio\crudbooster\helpers\CRUDBooster::myPrivilegeId() == CmsUsers::$TECNICO){

                $this->script_js = "
                       const pTag = document.querySelector('.box-footer');
                        const newButton = document.createElement('div');
                        newButton.textContent = 'Agregar equipo ';
                        newButton.setAttribute('id', 'mi-boton');
                        newButton.setAttribute('class', 'btn btn-sm btn-success');
                        pTag.insertAdjacentElement('afterend', newButton);
                        const miBoton = document.getElementById('mi-boton');
                        miBoton.type = 'buttom'

                        miBoton.onclick = function() {
                        const url = window.location.href;
                            const partes = url.split('/');
                            const ultimoElemento = partes.pop();

                            window.location.href = '/admin/equipos/add?client_id='+ultimoElemento;
                        }
                ";

            }
	        /*
	        | ----------------------------------------------------------------------
	        | Add javascript at body
	        | ----------------------------------------------------------------------
	        | javascript code in the variable
	        | $this->script_js = "function() { ... }";
	        |
	        */


            /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code before index table
	        | ----------------------------------------------------------------------
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code after index table
	        | ----------------------------------------------------------------------
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include Javascript File
	        | ----------------------------------------------------------------------
	        | URL of your javascript each array
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add css style at body
	        | ----------------------------------------------------------------------
	        | css code in the variable
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;



	        /*
	        | ----------------------------------------------------------------------
	        | Include css File
	        | ----------------------------------------------------------------------
	        | URL of your css each array
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();


	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for button selected
	    | ----------------------------------------------------------------------
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here

	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate query of index result
	    | ----------------------------------------------------------------------
	    | @query = current sql query
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
            if(\crocodicstudio\crudbooster\helpers\CRUDBooster::myPrivilegeId() == CmsUsers::$TECNICO){
                $query->where("servicio.tecnico_id","=",CRUDBooster::myId());
            }

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate row of index table html
	    | ----------------------------------------------------------------------
	    |
	    */
	    public function hook_row_index($column_index,&$column_value) {
	    	//Your code here
	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before add data is execute
	    | ----------------------------------------------------------------------
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after add public static function called
	    | ----------------------------------------------------------------------
	    | @id = last insert id
	    |
	    */
	    public function hook_after_add($id) {
	        //Your code here

	    }

            // ...



            // ...


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before update data is execute
	    | ----------------------------------------------------------------------
	    | @postdata = input post data
	    | @id       = current id
	    |
	    */
	    public function hook_before_edit(&$postdata,$id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_edit($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }




	    //By the way, you can still create your own method in here... :)


	}
