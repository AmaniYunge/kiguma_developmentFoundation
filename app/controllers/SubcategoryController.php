<?php

class SubcategoryController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//            $options = array(
//                'delete_type' => 'POST',
//                'db_host' => 'localhost',
//                'db_user' => 'root',
//                'db_pass' => 'kevdom',
//                'db_name' => 'example',
//            );
        require('UploadHandler.php');
////                 require ('CustomUploadHandler.php');
//                   $upload_handler = new CustomUploadHandler($options);
        $upload_handler = new UploadHandler();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show()
    {
        $file = Input::file('img1'); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('img1')->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->resizeInPixel(200, null, true);
            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."rooms";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            //connect & insert file record in database
            $post =  Portifolio::create(array(
                "name"           =>Input::get('name'),
                "discr"            =>Input::get('discr'),
                "image"            =>$filename ,
            ));

            return View::make("admin.addportifolio")->with("msg",'Post Added Successfull');
        } else {
            return View::make("admin.addportifolio")->with("emsg",'error Uploading file');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit()
    {
        $post = Portifolio::find(Input::get('id'));
        $post->discr = Input::get("discr");
        $post->name = Input::get("name");
        $post->save();


        if(Input::file('img1')){
            $file = Input::file('img1'); // your file upload input field in the form should be named 'file'
            $destinationPath = public_path().'/uploads';
            $filename = $file->getClientOriginalName();
            //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
            $uploadSuccess = Input::file('img1')->move($destinationPath, $filename);
            $RandNumber   		= rand(0, 9999999999);
            if( $uploadSuccess ) {
                require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
                chmod($destinationPath."/".$filename, 0777);
                $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                unlink(public_path().'/uploads/'.$filename);
                $layer->resizeInPixel(200, null, true);
                $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                $dirPath =public_path().'/uploads/' ."rooms";
                $filename = "_".$RandNumber.".png";
                $createFolders = true;
                $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                chmod($dirPath ."/".$filename , 0777);
                unlink(public_path().'/uploads/rooms/'.$post->image);
                //connect & insert file record in database
                $post->image  = $filename;
                $post->save();

            }
        }

        return View::make('admin.editportifolio',  compact("post"))->with("msg",'Changes to Post Details Added Successfull');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


//function outputs upload error messages, http://www.php.net/manual/en/features.file-upload.errors.php#90522
    function upload_errors($err_code) {
        switch ($err_code) {
            case UPLOAD_ERR_INI_SIZE:
                return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
            case UPLOAD_ERR_FORM_SIZE:
                return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
            case UPLOAD_ERR_PARTIAL:
                return 'The uploaded file was only partially uploaded';
            case UPLOAD_ERR_NO_FILE:
                return 'No file was uploaded';
            case UPLOAD_ERR_NO_TMP_DIR:
                return 'Missing a temporary folder';
            case UPLOAD_ERR_CANT_WRITE:
                return 'Failed to write file to disk';
            case UPLOAD_ERR_EXTENSION:
                return 'File upload stopped by extension';
            default:
                return 'Unknown upload error';
        }
    }

}
