<?php
/*
Ví dụ sử dụng class team-member-note-more để tắt chức năng load more
*/

// Ví dụ 1: Không có class team-member-note-more - sẽ có chức năng load more
?>
<div class="team-members">
    <div class="team-grid layout-7">
        <!-- 14 giảng viên -->
        <div class="team-member">Giảng viên 1</div>
        <div class="team-member">Giảng viên 2</div>
        <!-- ... thêm 12 giảng viên nữa -->
    </div>
    <div class="team-button text-center">
        <a href="#" class="btn-view-more">Xem thêm giảng viên</a>
    </div>
</div>

<?php
// Ví dụ 2: Có class team-member-note-more - sẽ KHÔNG có chức năng load more
?>
<div class="team-members team-member-note-more">
    <div class="team-grid layout-10">
        <!-- 14 giảng viên - tất cả sẽ hiển thị ngay -->
        <div class="team-member">Giảng viên 1</div>
        <div class="team-member">Giảng viên 2</div>
        <!-- ... thêm 12 giảng viên nữa -->
    </div>
    <div class="team-button text-center">
        <a href="#" class="btn-view-more">Xem thêm giảng viên</a>
        <!-- Nút này sẽ bị ẩn tự động -->
    </div>
</div>

<?php
// Ví dụ 3: Sử dụng trong file PHP thực tế (như ACMP)
$team_members = array(
    // ... dữ liệu giảng viên
);

// Quyết định có sử dụng class team-member-note-more hay không
$use_note_more = true; // hoặc false tùy theo logic nghiệp vụ

$layout_class = 'layout-10';
$container_class = $use_note_more ? 'team-members team-member-note-more' : 'team-members';
?>

<div class="<?php echo $container_class; ?>">
    <div class="team-grid <?php echo $layout_class; ?>">
        <?php foreach ($team_members as $member): ?>
            <div class="team-member">
                <!-- Nội dung giảng viên -->
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="team-button text-center">
        <a href="#" class="btn-view-more">Xem thêm giảng viên</a>
    </div>
</div>

<?php
// Ví dụ 4: Logic động dựa trên số lượng giảng viên
$team_members = array(
    // ... dữ liệu giảng viên
);

$member_count = count($team_members);

// Tự động quyết định layout và có sử dụng note-more hay không
if ($member_count <= 7) {
    $layout_class = 'layout-' . $member_count;
    $use_note_more = false; // Có chức năng load more
} else {
    $layout_class = 'layout-10';
    $use_note_more = true; // Không có chức năng load more, hiển thị tất cả
}

$container_class = $use_note_more ? 'team-members team-member-note-more' : 'team-members';
?>

<div class="<?php echo $container_class; ?>">
    <div class="team-grid <?php echo $layout_class; ?>">
        <?php foreach ($team_members as $member): ?>
            <div class="team-member">
                <!-- Nội dung giảng viên -->
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="team-button text-center">
        <a href="#" class="btn-view-more">Xem thêm giảng viên</a>
    </div>
</div> 