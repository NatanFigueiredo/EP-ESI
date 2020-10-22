<?php

//Metodo para carregar um model passada por parametro
function loadModel($modelName) {
    require_once(MODEL_PATH."/{$modelName}.php");
}

//Metodo para carrega uma view e paramentros caso seja necessario
function loadView($viewName, $params = null) {

    //Verificação se existe um array de parametros valido
    if(isset($params) && count($params > 0)) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH."/{$viewName}.php");
}

//Carregamento de templates
function loadTemplateView($viewName, $params = array()) {

    if(count($params > 0)) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }
    require_once(TEMPLATE_PATH."/header.php");
    require_once(VIEW_PATH."/{$viewName}.php");
    require_once(TEMPLATE_PATH."/footer.php");
}

function renderTitle($title, $subtitle, $icon = NULL) {
    require_once(TEMPLATE_PATH."/title.php");
}