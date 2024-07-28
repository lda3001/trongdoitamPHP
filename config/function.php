<?php
// Hàm chuyển đổi chuỗi thành slug
function convertToSlug($string){
    // Loại bỏ dấu từ chuỗi
    $string = removeVietnameseAccents($string);
    // Chuyển chuỗi về dạng chữ thường
    $string = mb_strtolower($string, 'UTF-8');
    // Thay thế khoảng trắng bằng dấu gạch ngang
    $string = preg_replace('/\s+/', '-', $string);
    // Loại bỏ các ký tự không phải chữ cái, số hoặc dấu gạch ngang
    $string = preg_replace('/[^a-z0-9\-]/', '', $string);
    // Loại bỏ các dấu gạch ngang ở đầu và cuối chuỗi
    $string = trim($string, '-');
    return $string;
}

// Hàm loại bỏ dấu từ chuỗi
function removeVietnameseAccents($str) {
    $accents = array(
        'á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ',
        'đ', 'é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ',
        'í', 'ì', 'ỉ', 'ĩ', 'ị', 'ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ',
        'ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự',
        'ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ',
        'Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ',
        'Đ', 'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ',
        'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị', 'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ',
        'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự',
        'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'
    );

    $noAccents = array(
        'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a',
        'd', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e',
        'i', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o',
        'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u',
        'y', 'y', 'y', 'y', 'y',
        'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A',
        'D', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E',
        'I', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O',
        'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U',
        'Y', 'Y', 'Y', 'Y', 'Y'
    );

    return str_replace($accents, $noAccents, $str);
}

function convertToOriginal($slug){
    // Tách các từ theo dấu gạch ngang
    $words = explode('-', $slug);
    // Phục hồi các từ bằng cách thêm dấu vào
    foreach ($words as &$word) {
        $word = restoreVietnameseAccents($word);
    }
    // Kết hợp các từ lại thành một chuỗi
    $original = implode(' ', $words);
    return $original;
}

// Hàm phục hồi các dấu từ chuỗi
function restoreVietnameseAccents($str) {
    $accents = array(
        'à', 'á', 'ả', 'ã', 'ạ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ',
        'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ',
        'ì', 'í', 'ỉ', 'ĩ', 'ị', 'ò', 'ó', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ',
        'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'ù', 'ú', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự',
        'ỳ', 'ý', 'ỷ', 'ỹ', 'ỵ', 'đ',
        'À', 'Á', 'Ả', 'Ã', 'Ạ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ',
        'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ',
        'Ì', 'Í', 'Ỉ', 'Ĩ', 'Ị', 'Ò', 'Ó', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ',
        'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ', 'Ù', 'Ú', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự',
        'Ỳ', 'Ý', 'Ỷ', 'Ỹ', 'Ỵ', 'Đ'
    );

    $noAccents = array(
        'à', 'á', 'ả', 'ã', 'ạ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ',
        'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ',
        'ì', 'í', 'ỉ', 'ĩ', 'ị', 'ò', 'ó', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ',
        'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'ù', 'ú', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự',
        'ỳ', 'ý', 'ỷ', 'ỹ', 'ỵ', 'đ',
        'À', 'Á', 'Ả', 'Ã', 'Ạ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ',
        'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ',
        'Ì', 'Í', 'Ỉ', 'Ĩ', 'Ị', 'Ò', 'Ó', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ',
        'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ', 'Ù', 'Ú', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự',
        'Ỳ', 'Ý', 'Ỷ', 'Ỹ', 'Ỵ', 'Đ'
    );

    return str_replace($accents, $noAccents, $str);
}


function thong_bao($string,$color){
    echo ' <div class="woocommerce-message message-wrapper" role="alert">
    <div class="container container-custom '.$color.' medium-text-center p-3">
      '.$string.'
    </div>';
}

function log_out(){
    unset($_SESSION['customerlogin']);
    echo "<script type='text/javascript'> document.location ='/'; </script>";
}

function add_to_cart($id)
{
   
  
}
function _query($sql)
{
	global $conn;
	return mysqli_query($conn, $sql);
}

function _fetch($sql)
{
	return mysqli_fetch_array(_query($sql));
}
function isset_sql($txt)
{
	global $conn;
	return mysqli_real_escape_string($conn, $txt);
}
function _insert($table, $input, $output)
{
	return "INSERT INTO $table($input) VALUES($output)";
}
function _select($select, $from, $where)
{
	return "SELECT $select FROM $from WHERE $where";
}
function _update($tabname, $input_output, $where)
{
	return "UPDATE $tabname SET $input_output WHERE $where";
}
function _delete($table, $condition)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM $table WHERE $condition");
}
