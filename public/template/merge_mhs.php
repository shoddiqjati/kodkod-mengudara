<?php

// Include classes
include_once('tbs_class.php'); // Load the TinyButStrong template engine
include_once('tbs_plugin_opentbs.php'); // Load the OpenTBS plugin


// prevent from a PHP configuration problem when using mktime() and date()
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
    if (ini_get('date.timezone')=='') {
        date_default_timezone_set('UTC');
    }
}

// Initialize the TBS instance
$TBS = new clsTinyButStrong; // new instance of TBS
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

// ------------------------------
// Prepare some data for the demo
// ------------------------------

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_simple";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Retrieve the user name to display

$hari = date('j');
$bulan = date('m');
$tahun = date('Y');

switch ($bulan) {
    case "01":
        $tanggal= $hari." Januari ".$tahun;
        break;
    case "02":
        $tanggal=$hari." Februari ".$tahun;
        break;
    case "03":
        $tanggal=$hari." Maret ".$tahun;
        break;
    case "04":
        $tanggal=$hari." April ".$tahun;
        break;
    case "05":
        $tanggal=$hari." Mei ".$tahun;
        break;
    case "06":
        $tanggal=$hari." Juni ".$tahun;
        break;
    case "07":
        $tanggal=$hari." Juli ".$tahun;
        break;
    case "08":
        $tanggal=$hari." Agustus ".$tahun;
        break;
    case "09":
        $tanggal=$hari." September ".$tahun;
        break;
    case "10":
        $tanggal=$hari." Oktober ".$tahun;
        break;
    case "11":
        $tanggal=$hari." November ".$tahun;
        break;
    case "12":
        $tanggal=$hari." Desember ".$tahun;
        break;
    default:
        $tanggal=$hari."Bulan".$tahun;
}

$kepada = (isset($_POST['kepada'])) ? $_POST['kepada'] : '';
$kepada = trim(''.$kepada);
$ket = (isset($_POST['keterangan'])) ? $_POST['keterangan'] : '';
if ($kepada=='') $kepada = "(kepada)";

$jml_id = (isset($_POST['jml_id'])) ? $_POST['jml_id'] : '';

if($jml_id==''){
    $jml_id=1;
}

for($i=1; $i<=$jml_id; $i++){



    ${'DOBDay'.$i} = (isset($_POST['DOBDay'.$i])) ? $_POST['DOBDay'.$i] : '';
    ${'DOBDay'.$i} = trim(''.${'DOBDay'.$i});
    if (${'DOBDay'.$i}=='') ${'DOBDay'.$i} = "-";

    ${'DOBMonth'.$i} = (isset($_POST['DOBMonth'.$i])) ? $_POST['DOBMonth'.$i] : '';
    ${'DOBMonth'.$i} = trim(''.${'DOBMonth'.$i});
    if (${'DOBMonth'.$i}=='') ${'DOBMonth'.$i} = "-";

    ${'DOBYear'.$i} = (isset($_POST['DOBYear'.$i])) ? $_POST['DOBYear'.$i] : '';
    ${'DOBYear'.$i} = trim(''.${'DOBYear'.$i});
    if (${'DOBYear'.$i}=='') ${'DOBYear'.$i} = "-";

    ${'lamacuti'.$i} = (isset($_POST['lamacuti'.$i])) ? $_POST['lamacuti'.$i] : '';
    ${'lamacuti'.$i} = trim(''.${'lamacuti'.$i});
    if (${'lamacuti'.$i}=='') ${'lamacuti'.$i} = "";

    ${'tatanggal'.$i} = (string)${'DOBDay'.$i}."-".(string)${'DOBMonth'.$i}."-".(string)${'DOBYear'.$i};

    ${'pengurang'.$i} = ${'lamacuti'.$i} -1;
    ${'tanggalmulai'.$i} = date('Y-m-d',strtotime(${'tatanggal'.$i}));
    ${'tanggalselesai'.$i} = date('Y-m-d',strtotime(${'tanggalmulai'.$i} . "+" .${'pengurang'.$i}. "days"));

    ${'harimulai'.$i} = substr(${'tanggalmulai'.$i}, 8,2);
    ${'bulanmulai'.$i} = substr(${'tanggalmulai'.$i}, 5,2);
    ${'tahunmulai'.$i} = substr(${'tanggalmulai'.$i}, 0,4);

    switch (${'bulanmulai'.$i}) {
        case "01":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Januari ".${'tahunmulai'.$i};
            break;
        case "02":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Februari ".${'tahunmulai'.$i};
            break;
        case "03":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Maret ".${'tahunmulai'.$i};
            break;
        case "04":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." April ".${'tahunmulai'.$i};
            break;
        case "05":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Mei ".${'tahunmulai'.$i};
            break;
        case "06":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Juni ".${'tahunmulai'.$i};
            break;
        case "07":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Juli ".${'tahunmulai'.$i};
            break;
        case "08":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Agustus ".${'tahunmulai'.$i};
            break;
        case "09":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." September ".${'tahunmulai'.$i};
            break;
        case "10":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Oktober ".${'tahunmulai'.$i};
            break;
        case "11":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." November ".${'tahunmulai'.$i};
            break;
        case "12":
            ${'tanggalmulai'.$i}=${'harimulai'.$i}." Desember ".${'tahunmulai'.$i};
            break;
        default:
            ${'tanggalmulai'.$i}=${'harimulai'.$i}."Bulan".${'tahunmulai'.$i};
    }

    ${'hariselesai'.$i} = substr(${'tanggalselesai'.$i}, 8,2);
    ${'bulanselesai'.$i} = substr(${'tanggalselesai'.$i}, 5,2);
    ${'tahunselesai'.$i} = substr(${'tanggalselesai'.$i}, 0,4);

    switch (${'bulanselesai'.$i}) {
        case "01":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Januari ".${'tahunselesai'.$i};
            break;
        case "02":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Februari ".${'tahunselesai'.$i};
            break;
        case "03":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Maret ".${'tahunselesai'.$i};
            break;
        case "04":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." April ".${'tahunselesai'.$i};
            break;
        case "05":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Mei ".${'tahunselesai'.$i};
            break;
        case "06":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Juni ".${'tahunselesai'.$i};
            break;
        case "07":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Juli ".${'tahunselesai'.$i};
            break;
        case "08":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Agustus ".${'tahunselesai'.$i};
            break;
        case "09":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." September ".${'tahunselesai'.$i};
            break;
        case "10":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Oktober ".${'tahunselesai'.$i};
            break;
        case "11":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." November ".${'tahunselesai'.$i};
            break;
        case "12":
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}." Desember ".${'tahunselesai'.$i};
            break;
        default:
            ${'tanggalselesai'.$i}=${'hariselesai'.$i}."Bulan".${'tahunselesai'.$i};
    }

}

for($i=1; $i<=10; $i++){
//bikin variabel supaya ketika kosong tetep jalan
    ${'nama'.$i} = "";
    ${'angkatan'.$i} = "";
    ${'niu'.$i} = "";
    ${'fakultas'.$i} = "";
    ${'nif'.$i} = "";
    ${'jurusan'.$i} = "";
    ${'prodi'.$i} = "";
    ${'tempat_lahir'.$i} = "";
    ${'tanggal_lahir'.$i} = "";
    ${'alamat'.$i} = "";
}


for($i=1; $i<=$jml_id; $i++){
    ${'niu'.$i} = (isset($_POST['niu'.$i])) ? $_POST['niu'.$i] : '';
    ${'niu'.$i} = trim(''.${'niu'.$i});
}


$data=array();

for($i=1; $i<=$jml_id; $i++){

    $nomer = $i;
    $niu = ${'niu'.$i};

    $sql = "SELECT * FROM list_mhs where niu = '$niu'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();


    ${'nama'.$i} = $row["nama"];
    if(${'nama'.$i}==""){
        ${'nama'.$i}="-";
    }
    ${'tempat_lahir'.$i} = $row["tempat_lahir"];
    if(${'tempat_lahir'.$i}==""){
        ${'tempat_lahir'.$i}="-";
    }
    ${'tanggal_lahir'.$i} = $row["tanggal_lahir"];
    if(${'tanggal_lahir'.$i}==""){
        ${'tanggal_lahir'.$i}="-";
    }
    ${'angkatan'.$i} = $row["angkatan"];
    if(${'angkatan'.$i}==""){
        ${'angkatan'.$i}="-";
    }
    ${'fakultas'.$i} = $row["fakultas"];
    if(${'fakultas'.$i}==""){
        ${'fakultas'.$i}="-";
    }
    ${'nif'.$i} = $row["nif"];
    if(${'nif'.$i}==""){
        ${'nif'.$i}="-";
    }
    ${'jurusan'.$i} = $row["jurusan"];
    if(${'jurusan'.$i}==""){
        ${'jurusan'.$i}="-";
    }
    ${'prodi'.$i} = $row["prodi"];
    if(${'prodi'.$i}==""){
        ${'prodi'.$i}="-";
    }
    ${'alamat'.$i} = $row["alamat"];
    if(${'alamat'.$i}==""){
        ${'alamat'.$i}="-";
    }

    if(${'lamacuti'.$i}==""){
        ${'lamacuti'.$i}="-";
    }

    $data[]=array(
        'nomer' => ${'nomer'},
        'niu' => ${'niu'.$i},
        'nama' => ${'nama'.$i},
        'tempat_lahir' => ${'tempat_lahir'.$i},
        'tanggal_lahir' => ${'tanggal_lahir'.$i},
        'angkatan' => ${'angkatan'.$i},
        'fakultas' => ${'fakultas'.$i},
        'nif' => ${'nif'.$i},
        'jurusan' => ${'jurusan'.$i},
        'prodi' => ${'prodi'.$i},
        'alamat' => ${'alamat'.$i},
        'lamacuti' => ${'lamacuti'.$i},
        'tanggalmulai' => ${'tanggalmulai'.$i},
        'tanggalselesai' => ${'tanggalselesai'.$i});
}

// -----------------
// Load the template
// -----------------

$template = (isset($_POST['tpl'])) ? $_POST['tpl'] : '';

$mhs_id;
$nama_mhs;
$query = "SELECT * FROM `list_mhs` WHERE `niu` = '$niu'";
$result_mhsid = $conn->query($query);
if ($result_mhsid->num_rows>0){
    while ($row = $result_mhsid->fetch_assoc()) {
        $mhs_id = $row['id'];
        $nama_mhs = $row['nama'];
    }
} else{}

$nama_surat;
$query = "SELECT `nama_surat` FROM `template_surat` WHERE `filename` = '$template'";
$result_surat = $conn->query($query);
if ($result_surat->num_rows>0) {
    while ($row = $result_surat->fetch_assoc()) {
        $nama_surat = $row['nama_surat'];
    }
}

$query = "INSERT INTO `record_mhs`(`tanggal_surat`, `mhs_id`, `nama_mhs`, `nama_surat`, `keterangan`, `status`) VALUES ('$tanggal', '$mhs_id', '$nama_mhs', '$nama_surat', '$ket', 'Processing')";
$result_insert = $conn->query($query);
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Also merge some [onload] automatic fields (depends of the type of document).
$TBS->MergeBlock('a', $data);

/*
// ----------------------
// Debug mode of the demo
// ----------------------
if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit.

// --------------------------------------------
// Merging and other operations on the template
// --------------------------------------------

// Merge data in the body of the document
$TBS->MergeBlock('a,b', $data);

// Change chart series
$ChartNameOrNum = 'a nice chart'; // Title of the shape that embeds the chart
$SeriesNameOrNum = 'Series 2';
$NewValues = array( array('Category A','Category B','Category C','Category D'), array(3, 1.1, 4.0, 3.3) );
$NewLegend = "Updated series 2";
$TBS->PlugIn(OPENTBS_CHART, $ChartNameOrNum, $SeriesNameOrNum, $NewValues, $NewLegend);

// Delete comments
$TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

*/

// -----------------
// Output the result
// -----------------

// Define the name of the output file
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', '_'.date('Y-m-d').$save_as.'.', $template);
if ($save_as==='') {
    // Output the result as a downloadable file (only streaming, no data saved in the server)
    $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); // Also merges all [onshow] automatic fields.
    // Be sure that no more output is done, otherwise the download file is corrupted with extra data.
    exit();
} else {
    // Output the result as a file on the server.
    $TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
    // The script can continue.
    exit("File [$output_file_name] has been created.");
}

$conn->close();
?>