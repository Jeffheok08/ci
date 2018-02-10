<h1> รายชื่อผู้เข้าร่วมอบรม <i class="fas fa-camera-retro"></i></h1>
        <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
        </div>
        <a href="/user/adduser" class="btn btn-success"><i class="fas fa-plus fa-spin "></i> เพิ่ม</a>
        <table class="table">
            <thead>
                <tr>
                    <th><i class="fas fa-heart fa-spin "></i></th>
                    <th>ชื่อ - สกุล</th>
                    <th>อีเมล์</th>
                    <th>อายุ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users->result() as $user) {
    ?>
                <tr>
                    <td><?php echo $user->user_id ?></td>
                    <td><?php echo $user->fullname ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->age ?></td>
                    <td>
                    <a href="/user/show/<?php echo $user->user_id ?>" class="btn btn-info"><i class="fas fa-eye " ></i> แสดง</a>
                        <a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning"><i class="fas fa-edit"></i> แก้ไข</a>
                        <a onclick="javascript: return confirm('แน่ใจก่อ ?')" href="/user/delete/<?php echo $user->user_id ?>" class="btn btn-danger"><i class="fas fa-minus-circle"></i> ลบ</a>
                    </td>
                </tr>
                
                <?php
} ?>
            </tbody>
        </table>
    