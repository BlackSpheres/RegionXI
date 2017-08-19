<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('galleries')->insert([
        0 => [
            'filename' => 'mt-apo.jpg',
            'displayname' => 'Mount Apo',
            'tag' => 'sur',],
        1 => [
            'filename' => 'eagol.jpg',
            'displayname' => 'Philippine Eagle',
            'tag' => 'occidental',],
        2 => [
            'filename' => 'lonwa.jpg',
            'displayname' => 'Lon Wa Buddhist Temple',
            'tag' => 'occidental',],
        3 => [
            'filename' => 'davao-baywalk.jpg',
            'displayname' => 'Davao Baywalk',
            'tag' => 'occidental',],
        4 => [
            'filename' => 'PEARLFARM.jpg',
            'displayname' => 'Pearl Farm Resort',
            'tag' => 'sur',],
        5 => [
            'filename' => 'davao-oriental.jpg',
            'displayname' => 'Davao Oriental',
            'tag' => 'oriental',],
        6 => [
            'filename' => 'rizal.jpg',
            'displayname' => 'Rizal Park',
            'tag' => 'sur',],
        7 => [
            'filename' => 'sanpedro.jpg',
            'displayname' => 'San Pero',
            'tag' => 'sur',],
        8 => [
            'filename' => 'chinatown.jpg',
            'displayname' => 'China Town',
            'tag' => 'sur',],
        9 => [
            'filename' => 'croc.jpg',
            'displayname' => 'Crocodile Park',
            'tag' => 'sur',],

        ]);
        $this->call(ChatterTableSeeder::class);
    }
}
