<html>
    <title>Add Depart</title>
    <head>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
   <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
   <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    <?php
 include_once '../Lesson_2/Code/Dept.php';
 if(isset($_POST['save']))
 {
     $check=CheckVaid($_POST['Name'],$_POST['code']);
    if($check==TRUE)
    {
    AddDept($_POST['Name'], $_POST['code']);
    }
    else
    {
        //echo "<h2>Name is Required</h2>";
    }
    
 }
 ?>
    <section>
        <form method="Post">
        <div class="row">
            
            <div class="col-sm-12">
                
                <div class="col-sm-6">
                    
                    <div class="form-group">
                        <label>Dept Name</label>
                        <input type="text" name="Name" class="form-control">
                        
                    </div>
                    
                      <div class="form-group">
                        <label>Dept Code</label>
                        <input type="text" name="code" class="form-control">
                        
                    </div>
                    
                    
                    <div class="form-group">
                       
                        <button type="submit" class="btn-success" name="save">Save</button>
                    </div>
                    
                    
                </div>
                  <div class="col-sm-6">
                    
                </div>
                
            </div>
            
        </div>
        </form>
        
    </section>
    
</html>

