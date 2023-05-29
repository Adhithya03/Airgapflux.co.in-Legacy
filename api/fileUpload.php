<?php
if (isset($_FILES['file'])) {
  // get file information
  $file = $_FILES['file'];
  $name = $file['name'];
  $tmp_name = $file['tmp_name'];
  $size = $file['size'];
  $type = $file['type'];
  $error = $file['error'];

  // check for errors
  if ($error === 0) {
    // check for file type
    if ($type === 'application/pdf') {
      // check for file size (max 5 MB)
      if ($size <= 30 * 1024 * 1024) {
        // create destination path
        $destination = "./$name";
        // move file to destination
        if (move_uploaded_file($tmp_name, $destination)) {
          // send success response as json
          echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully']);} else {
// send error response as json
echo json_encode(['status' => 'error', 'message' => 'File size exceeds limit']);
}
} else {
// send error response as json
echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);
}
} else {
// send error response as json
echo json_encode(['status' => 'error', 'message' => 'File upload error']);
}
}

}
