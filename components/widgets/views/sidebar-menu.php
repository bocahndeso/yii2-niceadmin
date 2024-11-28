<?php

use yii\helpers\Url;
use yii\helpers\ArrayHelper;

function renderMenu($items, $activeRoute)
{
    $output = '<ul class="sidebar-nav" id="sidebar-nav">';
    foreach ($items as $item) {
        if (isset($item['heading']) && $item['heading']) {
            // Item berupa heading (non-link)
            $output .= '<li class="nav-heading">' . $item['label'] . '</li>';
        } elseif (isset($item['items'])) {
            // Item dengan submenu
            $isActive = ArrayHelper::isIn($activeRoute, array_column($item['items'], 'url'));
            $output .= '<li class="nav-item">';
            $output .= '<a class="nav-link ' . ($isActive ? '' : 'collapsed') . '" data-bs-target="#' . $item['id'] . '-nav" data-bs-toggle="collapse" href="#">';
            $output .= '<i class="' . $item['icon'] . '"></i><span>' . $item['label'] . '</span><i class="bi bi-chevron-down ms-auto"></i>';
            $output .= '</a>';
            $output .= '<ul id="' . $item['id'] . '-nav" class="nav-content collapse ' . ($isActive ? 'show' : '') . '" data-bs-parent="#sidebar-nav">';
            foreach ($item['items'] as $subItem) {
                $isSubActive = $activeRoute === $subItem['url'];
                $output .= '<li>';
                $output .= '<a href="' . Url::to($subItem['url']) . '" class="' . ($isSubActive ? 'active' : '') . '">';
                $output .= '<i class="bi bi-circle"></i><span>' . $subItem['label'] . '</span>';
                $output .= '</a>';
                $output .= '</li>';
            }
            $output .= '</ul>';
            $output .= '</li>';
        } else {
            // Item dengan link
            $isActive = $activeRoute === $item['url'];
            $output .= '<li class="nav-item">';
            $output .= '<a class="nav-link ' . ($isActive ? 'active' : '') . '" href="' . Url::to($item['url']) . '">';
            $output .= '<i class="' . $item['icon'] . '"></i><span>' . $item['label'] . '</span>';
            $output .= '</a>';
            $output .= '</li>';
        }
    }
    $output .= '</ul>';
    return $output;
}

$currentRoute = Yii::$app->controller->getRoute(); // Mendapatkan rute saat ini
echo renderMenu($items, $currentRoute);
