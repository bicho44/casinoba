<?php

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_news_widget_title'
,'label' => __('Título', 'imgd')
,'value' => __('Últimas Noticias','imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));

piklist('field', array(
    'type' => 'number'
,'field' => 'imgd_news_widget_cantidad'
,'label' => __('Mostrar', 'imgd')
,'description' => 'Cantidad de noticias a mostrar que se deben mostrar (max 12)'
,'value' => 5
,'attributes' => array(
        'class' => 'small-text'
    ,'step' => 1
    ,'min' => 0
    ,'max' => 12
    )
));

piklist('field', array(
    'type' => 'select'
,'field' => 'imgd_news_widget_orden'
,'label' => __('Ordenar por', 'imgd')
,'value' => 'third'
,'choices' => array(
        'fecha' => __('Fecha', 'imgd')
        ,'alpha' => __('Alfabético', 'imgd')
    )
));