<?php

function printMessage($message) {
    if ($message=='success-create')
        return '<span class="text-success">Registration successfully Complete!</span>';
    if ($message=='error-create')
        return '<span class="text-error">Error when registering.</span>';

    if ($message=='success-remove')
        return '<span class="text-success">Registration removed successfully!</span>';
    if ($message=='error-remove')
        return '<span class="text-error">Error removing registration.</span>';

    if ($message=='success-update')
        return '<span class="text-success">Registration updated successfully!</span>';
    if ($message=='error-update')
        return '<span class="text-error">Error updating registration.</span>';
}
