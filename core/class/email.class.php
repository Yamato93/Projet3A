<?php

/**
* Mail
*
* Envoi de mail
*
*
**/
	class Mail
	{
		private $nom_expe;		//nom de l'expe
		private $civi_expe;		//nom de l'expe
		private $email_expe;	//mail de l'expe
		private $email_reply;	//mail de réponse
		private $emails_bcc;	//messages cachés
		private $destinataires;	//mails des destinataires
		private $message_text;	//message text
		private $message_html;	//message en html
		private $sujet;			//sujet du mail
		private $files;			//les fichiers
		private $frontiere;		//la frontiere	
		private $header;		//le header

		// CONSTRUIRE LE MAIL
		public function __construct($civi_expe, $nom_expe, $email_expe, $email_reply)
		{
		    session_unset('erreur');
            try {
               // deux des param doivent être des mails // on les sépares pour differencier les messages
    			if(!self::valideEmail($email_expe))
    			{
    				throw new InvalidArgumentException("Mail éxpediteur invalide!");
    			}
    			if(!self::valideEmail($email_reply))
    			{
    				throw new InvalidArgumentException("Le champs email n'est pas renseigné.");
    			} 
    			//echo 'contruct'; var_dump($_SESSION['erreur']);
            } 
            catch (Exception $e) {
                $_SESSION['erreur'] = $e->getMessage();
            }
            
			// initialisation des propriétés
			$this->nom_expe = $nom_expe;
			$this->civi_expe = $civi_expe;
			$this->email_expe = $email_expe;
			$this->email_reply = $email_reply;
			$this->bcc = "";
			$this->destinataires = "";
			$this->message_text = "";
			$this->message_html = "";
			$this->sujet = "";
			$this->files = "";
			$this->frontiere = md5(uniqid(mt_rand())); // generer la frontiere entre le texte, html et PJ
			$this->header = "";
			$this->expe = "";
			// on a donc ici un contenu sécurisé
			
			//echo $nom_expe . '-' . $civi_expe . '-' . $email_expe . '-' . $email_reply;
			//echo nom inserée, civi choisie, email en dure, email inserée
		}
		
		// VALIDATION D'EMAIL
		private static function valideEmail($email) //$email, sors d'ici 
		{
			return filter_var($email, FILTER_VALIDATE_EMAIL);
		}

		public function ajouter_destinataire($mail)
		{
		    
		    try 
		    {
    			if(!self::valideEmail($mail))
    			{
    				throw new InvalidArgumentException("Mail destinataire invalide!");
    			}
    
    			if ($this->destinataires=='')
    			{
    				$this->destinataires=$mail;
    			}
    			else
    			{
    				$this->destinataires.=';'.$mail;
    			} 
            } 
            catch (Exception $e) {
                $_SESSION['erreur'] = $e->getMessage();
            }
		}

		public function ajouter_bcc($mail)
		{
		    try 
		    {
    			if($mail != '' && !self::valideEmail($mail))
    			{
    				throw new InvalidArgumentException("Mail bcc invalide!");
    			}
    			
    			if ($this->bcc=='')
    			{
    				$this->bcc=$mail;
    			}
    			else
    			{
    				$this->bcc.=';'.$mail;
    			}
			} 
            catch (Exception $e) {
                $_SESSION['erreur'] = $e->getMessage();
            }
		}

		public function ajouter_pj($files)
		{
		    try
		    {
    			if(!file_exists($files))
    			{
    				throw new InvalidArgumentException("La pj " . $files . " est invalide!");
    			}
    
    			if ($this->files=='')
    			{
    				$this->files=$files;
    			}
    			else
    			{
    				$this->files.=';'.$files;
    			}
            } 
            catch (Exception $e) {
                $_SESSION['erreur'] = $e->getMessage();
            }
		}

        
		// DEFINITION DES SETTERS
		public function contenu($sujet, $message_html, $civi_expe, $nom_expe, $email_reply)
		{
		    try {
               // deux des param doivent être des mails // on les sépares pour differencier les messages
    			if($sujet == null)
    			{
    				throw new InvalidArgumentException("Le champs objet n'est pas renseigné");
    			} 
    			//echo 'contenu'; var_dump($_SESSION['erreur']);
            } 
            catch (Exception $e) {   
                $_SESSION['erreur'] = $e->getMessage();
            }
            
            
                $this->sujet = $sujet;
    			$this->message_html = $message_html;
    			$this->expe = '<p><b>' . $civi_expe . ' ' . $nom_expe . "</b><br>";
    			$this->expe .= $email_reply . "<br>";
    			$this->expe .= date("d-m-Y H:i") . '</p>';
    			//$this->message_text = $message_text;
            
		}

		public function envoyerMail()
		{	
			$this->header = 'From: "'. $this->civi_expe . ' ' . $this->nom_expe .'" <'. $this->email_expe .'>' . "\n";
			$this->header .= 'Reply-To: <' . $this->email_reply . '>' . "\n";
			$this->header .= 'MIME-Version: 1.0 ' . "\n";
			$this->header .= "Content-Type: text/html; charset='utf-8'";
			
            mail($this->destinataires, $this->sujet, $this->message_html . $this->expe, $this->header);
            
		}
	}