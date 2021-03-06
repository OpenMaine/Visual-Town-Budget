<?php
  global $selected_budget;

  $d = dirname(__FILE__) . '/';

  // VARIABLES IN ORIGINAL CODE
  //
  // $siteName = "Portland Maine Visual budget";
  // $siteURL = "http://www.portlandmaine.gov/201/Budget-Financial-Documents";
  // $municipalURL = "http://www.portlandmaine.gov/201/Budget-Financial-Documents";
  // $feedbackEmail = "theportlandbudget@gmail.com";
  // $shortName = "Portland";
  // $longName = "Portland";
  // $state = "Maine";
  // $stateAbbreviation = "ME";
  // $gaKey = "";


  // ROB KOROBKIN - WordPress-Configurable Fields
  // {
  //   "slug":"portland_city",
  //   "page_title":"City of Portland - Municipal Budget"
  //   "sections":["revenues","expenses","funds"],
  //
  //   "include_taxes":"1",
  //
  //   "title":"See Portland's budget.",
  //   "header_html":"...",
  //   "tax_description":"...",
  //   "budget_questions": "...",
  //
  //   "custom_js":"",
  //
  //   "info_source_name":"City of Portland",
  //   "info_source_url":"URL"
  // };



  # App Path
  $app_dir = plugins_url('visgov_wp') .  '/';

?>
<script>
  var app_path = '<?php echo $app_dir; ?>';
  var budget_settings = <?php echo json_encode($selected_budget -> meta); ?>;
  budget_settings.adjustForInflation = <?php echo isset($_GET['afi']) ? 1 : 0; ?> ;

  var inflation = [
    [ 2018, 1 ],
    [ 2017, 1.7 ],
    [ 2016, 0.8 ],
    [ 2015, 0.2 ],
    [ 2014, 2 ],
    [ 2013, 2 ],
    [ 2012, 1.4 ]
  ];

</script>



<?php
  require_once $d . 'includes/home.php';
  require_once $d . 'includes/container.php';
  require_once $d . 'includes/templates.php';
  require_once $d . "includes/datafiles.php";
?>
