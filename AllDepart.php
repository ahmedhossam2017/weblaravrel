<html>
    <title>Add Depart</title>
    <head>
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
   <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
   <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    <?php
    include_once '../Lesson_2/Code/Dept.php';
    
    ?>
    <section>
        <form method="Post">
        <div class="row">
            
            <div class="col-sm-12">
                
               
                <table class="table table-striped">
                    
                    <thead>
                        <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Create At</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                        GetDept();
                        
                        ?>
                    </tbody>
                    
                    
                </table>    
                
                
            </div>
            
        </div>
        </form>
        
    </section>
    
</html>

