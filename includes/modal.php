<?php
/**
 * Functions for the Modal
 */
namespace Modal;

function renderTheTitle( $id )
{
    $title  = explode( '|', get_the_title( $id ) );
    $o      = '<span>' . array_shift( $title ) . '</span>';;
    $o      .= count( $title ) ? ' | ' . join( '|', $title ) : '';
    return $o;
}