<?php

namespace App\Helpers;

class DateId
{

	public static function getDayDateId($date)
    {
        $day=date('D',strtotime($date));
        switch($day)
        {
            case 'Sun':
                    $hari='Minggu';
                    break;
            case 'Mon':
                    $hari='Senin';
                    break;
            case 'Tue':
                    $hari='Selasa';
                    break;
            case 'Wed':
                    $hari='Rabu';
                    break;
            case 'Thu':
                    $hari='Kamis';
                    break;
            case 'Fri':
                    $hari="Jum'at";
                    break;
            default:
                    $hari='Sabtu';
        }


        $month=date('M', strtotime($date));
        switch($month)
        {
            case 'Jan':
                    $bulan='Januari';
                    break;
            case 'Feb':
                    $bulan='Februari';
                    break;
            case 'Mar':
                    $bulan='Maret';
                    break;
            case 'Apr':
                    $bulan='April';
                    break;
            case 'May':
                    $bulan='Mei';
                    break;
            case 'Jun':
                    $bulan='Juni';
                    break;
            case 'Jul':
                    $bulan='Juli';
                    break;
            case 'Aug':
                    $bulan='Agustus';
                    break;
            case 'Sep':
                    $bulan='September';
                    break;
            case 'Oct':
                    $bulan='Oktober';
                    break;
            case 'Nov':
                    $bulan='November';
                    break;
            default:
                    $bulan='Desember';
        }

        //return $hari.', '.$bulan.', '.date('d M Y',strtotime($date));
        return $hari.', '.date('d',strtotime($date)).' '.$bulan.' '.date('Y',strtotime($date));
    }


    public static function getDayDateTimeId($date)
    {
        $day=date('D',strtotime($date));
        switch($day)
        {
            case 'Sun':
                    $hari='Minggu';
                    break;
            case 'Mon':
                    $hari='Senin';
                    break;
            case 'Tue':
                    $hari='Selasa';
                    break;
            case 'Wed':
                    $hari='Rabu';
                    break;
            case 'Thu':
                    $hari='Kamis';
                    break;
            case 'Fri':
                    $hari="Jum'at";
                    break;
            default:
                    $hari='Sabtu';
        }

        $month=date('M', strtotime($date));
        switch($month)
        {
            case 'Jan':
                    $bulan='Januari';
                    break;
            case 'Feb':
                    $bulan='Februari';
                    break;
            case 'Mar':
                    $bulan='Maret';
                    break;
            case 'Apr':
                    $bulan='April';
                    break;
            case 'May':
                    $bulan='Mei';
                    break;
            case 'Jun':
                    $bulan='Juni';
                    break;
            case 'Jul':
                    $bulan='Juli';
                    break;
            case 'Aug':
                    $bulan='Agustus';
                    break;
            case 'Sep':
                    $bulan='September';
                    break;
            case 'Oct':
                    $bulan='Oktober';
                    break;
            case 'Nov':
                    $bulan='November';
                    break;
            default:
                    $bulan='Desember';
        }
        //return $hari.', '.date('d M Y H:i',strtotime($date));
        return $hari.', '.date('d',strtotime($date)).' '.$bulan.' '.date('Y H:i',strtotime($date));
    }


}
