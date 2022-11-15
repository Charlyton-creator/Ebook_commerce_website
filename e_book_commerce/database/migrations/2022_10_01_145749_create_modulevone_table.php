<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //abonnements table
        Schema::create('abonnements',function (Blueprint $table){
            $table->id();
            $table->string('libelle');
            $table->double('is_current_price');
            $table->double('price');
            $table->timestamps();
        });
        //users
        Schema::create('users',function (Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('password');
            $table->integer('tel_number');
            $table->string('sexe');
            $table->string('prenom');
            $table->boolean('has_abonnement');
            $table->foreignId('abonement_id')
            ->references('id')
            ->on('abonnements')
            ->Ondelete('cascade')->nullable();
            $table->boolean('has_dashboard');
            $table->string('profile');
            $table->string('activity_domain');
            $table->timestamps();
        });
        //features table
        Schema::create('features',function (Blueprint $table){
            $table->id();
            $table->string('libelle');
            $table->foreignId('abonement_id')
            ->references('id')
            ->on('abonnements')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //publicités table
        Schema::create('publicites',function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('text');
            $table->string('image');
            $table->datetime('validity');
            $table->timestamps();
        });
        // codepack
        Schema::create('codepacks',function (Blueprint $table){
            $table->id();
            $table->string('code');
            $table->timestamps();
        });
        //e_books
        Schema::create('e_books',function (Blueprint $table){
            $table->id();
            $table->string('libelle');
            $table->string('description');
            $table->string('ebook_document');
            $table->string('flip_book_link');
            $table->double('is_current_price');
            $table->double('price');
            $table->integer('nombre_recettes');
            $table->timestamps();
        });
        //categorie
        Schema::create('categories',function (Blueprint $table){
            $table->id();
            $table->string('libelle');
            $table->timestamps();
        });
        //recette 
        Schema::create('recettes',function (Blueprint $table){
            $table->id();
            $table->string('recette_name');
            $table->foreignId('recette_categorie')
            ->references('id')
            ->on('categories')
            ->Ondelete('cascade');
            $table->string('image_recette');
            $table->foreignId('e_book_id')
            ->references('id')
            ->on('e_books')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //geo_tags
        Schema::create('geo_tags',function (Blueprint $table){
            $table->id();
            $table->string('libelle');
            $table->timestamps();
        });
        //recette_geo_tag
        Schema::create('recette_geo_tags',function (Blueprint $table){
            $table->id();
            $table->foreignId('recette_id')
            ->references('id')
            ->on('recettes')
            ->Ondelete('cascade');
            $table->foreignId('geo_tag_id')
            ->references('id')
            ->on('geo_tags')
            ->onDelete('cascade');
            $table->timestamps();
        });
        //promotion
        Schema::create('promotions',function (Blueprint $table){
            $table->id();
            $table->foreignId('e_book_id')
            ->references('id')
            ->on('e_books')
            ->Ondelete('cascade');
            $table->float('reduction');
            $table->datetime('duree');
            $table->boolean('is_active');
            $table->foreignId('codepack_id')
            ->references('id')
            ->on('codepacks')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //temoignage
        Schema::create('temoignages',function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //cart
        Schema::create('carts',function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //ebook_user
        Schema::create('e_books_users',function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->Ondelete('cascade');
            $table->foreignId('ebook_id')
            ->references('id')
            ->on('e_books')
            ->Ondelete('cascade');
            $table->foreignId('cart_id')
            ->references('id')
            ->on('carts')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //souscriptios
        Schema::create('souscriptions',function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->Ondelete('cascade');
            $table->foreignId('abonnement_id')
            ->references('id')
            ->on('abonnements')
            ->Ondelete('cascade');
            $table->boolean('is_active');
            $table->timestamps();
        });
        //payement
        Schema::create('payements',function (Blueprint $table){
            $table->id();
            $table->foreignId('cart_id')
            ->references('id')
            ->on('carts')
            ->Ondelete('cascade');
            $table->foreignId('souscription_id')
            ->references('id')
            ->on('souscriptions')
            ->Ondelete('cascade');
            $table->string('payement_method');
            $table->string('payement_status');
            $table->string('adresse');
            $table->timestamps();
        });
        //entreprise_pubs
        Schema::create('user_pubs',function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->Ondelete('cascade');
            $table->foreignId('pub_id')
            ->references('id')
            ->on('publicites')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //e_book_temoignages
        Schema::create('ebook_temoignages',function (Blueprint $table){
            $table->id();
            $table->foreignId('e_book_id')
            ->references('id')
            ->on('e_books')
            ->Ondelete('cascade');
            $table->foreignId('temoignage_id')
            ->references('id')
            ->on('temoignages')
            ->Ondelete('cascade');
            $table->timestamps();
        });
        //commandes
        Schema::create('commandes',function (Blueprint $table){
            $table->id();
            $table->foreignId('cart_id')
            ->references('id')
            ->on('carts')
            ->Ondelete('cascade');
            $table->foreignId('user_id')
            ->references('id')
            ->on('users')
            ->Ondelete('cascade');
            $table->double('total');
            $table->timestamps();
        });
        //commandes
        Schema::create('newsletters',function (Blueprint $table){
            $table->id();
            $table->string('email')->unique();
            $table->string('month_souscription');
            $table->string('year_souscription');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('modulevone');
    }
};
