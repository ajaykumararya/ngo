<div class="row">
    <div class="{card_class}">
        <div class="card-header">
            <h3 class="card-title">List Enquiry Data</h3>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table bordered table-striped" id="enquiry_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Subject/Course Name</th>
                            <th>Message</th>
                            <th>Enquiry Type</th>
                            <?php
                            if(PATH == 'aicesm')
                                echo '<th>Admin Status</th>';
                            ?>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {list}
                            <tr>
                                <td></td>
                                <td>{date}</td>
                                <td>{name}</td>
                                <td>{email}</td>
                                <td>{mobile}</td>
                                <td>{course_name}</td>
                                <td>{message}</td>
                                
                                <td><label class="badge badge-primary">{type_data}</label></td>
                                <?php
                                if(PATH == 'aicesm'){
                                    ?>
                                    <td><button  data-text='{admin_message}' class='btn btn-xs btn-sm btn-info update-status'>Update Status</button></td>
                                    <?php
                                }
                                ?>
                                <td>{id}</td>
                            </tr>
                        {/list}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>