<?php
function PMA_isRememberSortingOrder($analyzed_sql_results)
{
    return $GLOBALS['cfg']['RememberSorting']
        && ! ($analyzed_sql_results['is_count']
            || $analyzed_sql_results['is_export']
            || $analyzed_sql_results['is_func']
            || $analyzed_sql_results['is_analyse'])
        && $analyzed_sql_results['select_from']
        && ((empty($analyzed_sql_results['select_expr']))
<<<<<<< HEAD
            || (count($analyzed_sql_results['select_expr']) == 1)
=======
            || (count($analyzed_sql_results['select_expr'])== 1)
>>>>>>> 3b53db0a6a3aee3c4f9a6dab49bd1116c8b02500
                && ($analyzed_sql_results['select_expr'][0] == '*'))
        && count($analyzed_sql_results['select_tables']) == 1;
}

?>
