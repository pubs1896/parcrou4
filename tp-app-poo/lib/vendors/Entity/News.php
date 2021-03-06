<?php

namespace Entity;

use \blog\Entity;

class News extends Entity
{
    protected $auteur,
        $titre,
        $contenu,
        $image,
        $dateAjout,
        $dateModif,
        $date,
        $etat;

    const AUTEUR_INVALIDE = 1;
    const TITRE_INVALIDE = 2;
    const IMAGE_INVALIDE = 3;
    const CONTENU_INVALIDE = 4;

    public function isValid()
    {
        return !(empty($this->auteur) || empty($this->titre) || empty($this->contenu));
    }


    // SETTERS //

    public function setAuteur($auteur)
    {
        if (!is_string($auteur) || empty($auteur)) {
            $this->erreurs[] = self::AUTEUR_INVALIDE;
        }

        $this->auteur = $auteur;
    }

    public function setTitre($titre)
    {
        if (!is_string($titre) || empty($titre)) {
            $this->erreurs[] = self::TITRE_INVALIDE;
        }

        $this->titre = $titre;
    }

    public function setImage($image)
    {
        if (!is_string($image) || empty($image)) {
            $this->erreurs[] = self::IMAGE_INVALIDE;
        }

        $this->image = $image;
    }

    public function setEtat($etat)
    {
        if (!is_string($etat) || empty($etat)) {
            $this->erreurs[] = self::IMAGE_INVALIDE;
        }
        $this->etat = $etat;
    }

    public function setContenu($contenu)
    {
        if (!is_string($contenu) || empty($contenu)) {
            $this->erreurs[] = self::CONTENU_INVALIDE;
        }

        $this->contenu = $contenu;
    }

    public function setDateAjout(\DateTime $dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }

    public function setDateModif(\DateTime $dateModif)
    {
        $this->dateModif = $dateModif;
    }

    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    // GETTERS //

    public function auteur()
    {
        return $this->auteur;
    }

    public function titre()
    {
        return $this->titre;
    }

    public function image()
    {
        return $this->image;
    }

    public function etat()
    {
        return $this->etat;
    }

    public function date()
    {
        return $this->date;
    }

    public function contenu()
    {
        return $this->contenu;
    }

    public function dateAjout()
    {
        return $this->dateAjout;
    }

    public function dateModif()
    {
        return $this->dateModif;
    }
}