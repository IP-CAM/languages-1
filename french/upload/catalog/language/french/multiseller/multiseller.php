<?php

// **********
// * Global *
// **********
$_['ms_viewinstore'] = 'Voir dans le magasin';
$_['ms_view'] = 'Voir';
$_['ms_publish'] = 'Publier';
$_['ms_unpublish'] = 'Dépublier';
$_['ms_edit'] = 'Editer';
$_['ms_clone'] = 'Cloner';
$_['ms_relist'] = 'Relister';
$_['ms_rate'] = 'Taux';
$_['ms_download'] = 'Télécharger';
$_['ms_create_product'] = 'Ajouter un nouveau produit à vendre';
$_['ms_delete'] = 'Supprimer';
$_['ms_update'] = 'Mettre à jour';
$_['ms_type'] = 'Type';
$_['ms_amount'] = 'Montant';
$_['ms_status'] = 'Statut';
$_['ms_date_paid'] = 'Date de paiement';
$_['ms_last_message'] = 'Dernier message';
$_['ms_description'] = 'Description';
$_['ms_id'] = 'N°';
$_['ms_by'] = 'par';
$_['ms_action'] = 'Action';
$_['ms_sender'] = 'Expéditeur';
$_['ms_message'] = 'Message';


$_['ms_date_created'] = 'Date de création ';
$_['ms_date'] = 'Date';

$_['ms_button_submit'] = 'Envoyer';
$_['ms_button_add_special'] = 'Définir une nouvelle réduction';
$_['ms_button_add_discount'] = 'Définir un nouveau rabais sur les quantités';
$_['ms_button_submit_request'] = 'Envoyer la demande';
$_['ms_button_save'] = 'Sauvegarder';
$_['ms_button_cancel'] = 'Annuler';
$_['ms_button_select_predefined_avatar'] = 'Selectionner un  avatar pré-défini';

$_['ms_button_select_image'] = 'Sélectionner une image';
$_['ms_button_select_images'] = 'Sélectionner des images';
$_['ms_button_select_files'] = 'Sélectionnes des fichiers';

$_['ms_transaction_order'] = 'Vente : vente n°%s';
$_['ms_transaction_sale'] = 'Vente : %s (-%s de commission)';
$_['ms_transaction_refund'] = 'Remboursement : %s';
$_['ms_transaction_listing'] = 'Frais de mise en vent de produits : %s (%s)';
$_['ms_transaction_signup']      = 'Frais d\'inscription sur la plateforme %s';
$_['ms_request_submitted'] = 'Votre demande a été envoyée';

$_['ms_totals_line'] = 'Actuellement %s vendeurs et %s produits à vendre !';

$_['ms_text_welcome'] = '<a href="%s">Se connecter</a> | <a href="%s">Créer un compte</a> | <a href="%s">Créer un compte vendeur</a>.';
$_['ms_button_register_seller'] = 'S\'enregistrer comme vendeur';
$_['ms_register_seller_account'] = 'Créer un compte vendeur';

// Mails

// Seller
$_['ms_mail_greeting'] = "Bonjour %s,\n\n";
$_['ms_mail_greeting_no_name'] = "Bonjour,\n\n";
$_['ms_mail_ending'] = "\n\nCordialement,,\n%s";
$_['ms_mail_message'] = "\n\nMessage :\n%s";

$_['ms_mail_subject_seller_account_created'] = 'Compte vendeur créé';
$_['ms_mail_seller_account_created'] = <<<EOT
Votre compte vendeur %s a été créé!

Vous pouvez commencer à ajouter des produits à vendre.
EOT;

$_['ms_mail_subject_seller_account_awaiting_moderation'] = 'Le compte vendeur est en attente de validation';
$_['ms_mail_seller_account_awaiting_moderation'] = <<<EOT
Votre compte vendeur %s a été créé et est maintenant en attente de validation.

Vous recevrez un email dès qu il sera validé.
EOT;

$_['ms_mail_subject_product_awaiting_moderation'] = 'Produit en attente de validation';
$_['ms_mail_product_awaiting_moderation'] = <<<EOT
Votre produit %s à %s est en attente de validation.

Vous recevrez un email dès qu il sera validé.
EOT;

$_['ms_mail_subject_product_purchased'] = 'New order';
$_['ms_mail_product_purchased'] = <<<EOT
Un ou plusieurs de vos produits ont été acheté par %s.

Client : %s (%s)

Produits :
%s
Total: %s
EOT;

$_['ms_mail_product_purchased_no_email'] = <<<EOT
Un ou plusieurs de vos produits ont été acheté par %s.
    
Client : %s (%s)
    
Produits :
%s
Total: %s
EOT;

$_['ms_mail_subject_seller_contact'] = 'New customer message';
$_['ms_mail_seller_contact'] = <<<EOT
Vous avez reçu un nouveau message d un client !

Nom : %s

Email : %s

Produit : %s

Message :
%s
EOT;

$_['ms_mail_seller_contact_no_mail'] = <<<EOT
Vous avez reçu un nouveau message d un client !
    
Nom : %s
    
Email : %s
    
Produit : %s
    
Message :
%s
EOT;

$_['ms_mail_product_purchased_info'] = <<<EOT
\n
Adresse de livraison :

%s %s
%s
%s
%s
%s %s
%s
%s
EOT;

$_['ms_mail_product_purchased_comment'] = 'Commentaire : %s';

$_['ms_mail_subject_withdraw_request_submitted'] = 'Demande de reversement envoyée';
$_['ms_mail_withdraw_request_submitted'] = <<<EOT
Nous avons reçu votre demande de paiment. Vous recevrez votre argent dès validation de notre part.
EOT;

$_['ms_mail_subject_withdraw_request_completed'] = 'Reversement effectué';
$_['ms_mail_withdraw_request_completed'] = <<<EOT
Votre demande de paiement a été validée. Vous allez recevoir sous peu votre argent.
EOT;

$_['ms_mail_subject_withdraw_request_declined'] = 'Demande de reversement refusée';
$_['ms_mail_withdraw_request_declined'] = <<<EOT
Votre demande de paiement a été refusée. Vos fonds ont été remis à votre solde de %s.
EOT;

$_['ms_mail_subject_transaction_performed'] = 'Nouvelle transaction';
$_['ms_mail_transaction_performed'] = <<<EOT
Une nouvelle transaction a été ajoutée à votre compte pour un montant de %s.
EOT;

$_['ms_mail_subject_remind_listing'] = 'Fin de mise en vente de votre produit';
$_['ms_mail_seller_remind_listing'] = <<<EOT
La mise en vente du produit %s a été interrompue. Connectez-vous à votre compte vendeur pour le remettre en vente.
EOT;

// *********
// * Admin *
// *********
$_['ms_mail_admin_subject_seller_account_created'] = 'Nouveau compte vendeur créé';
$_['ms_mail_admin_seller_account_created'] = <<<EOT
Un nouveau compte vendeur pour %s a été créé !
Nom du vendeur : %s (%s)
Email : %s
EOT;

$_['ms_mail_admin_subject_seller_account_awaiting_moderation'] = 'Nouveau compte vendeur en attente de modération';
$_['ms_mail_admin_seller_account_awaiting_moderation'] = <<<EOT
Un nouveau compte vendeur pour %s a été créé et est en attente de modération.
Nom du vendeur : %s (%s)
Email : %s

Vous pouvez l activier en vous rendant dans la section Multivendeurs de l espace d adminitration.
EOT;

$_['ms_mail_admin_subject_product_created'] = 'Nouveau produit ajouté';
$_['ms_mail_admin_product_created'] = <<<EOT
Le nouveau produit %s a été ajouté à %s.

Vous pouvez le voir et l éditer dans l espace d adminitration.
EOT;

$_['ms_mail_admin_subject_new_product_awaiting_moderation'] = 'Nouveau produit en attente de modération';
$_['ms_mail_admin_new_product_awaiting_moderation'] = <<<EOT
Le nouveau produit %s a été ajouté à %s et est en attente de modération.

Vous pouvez l activier en vous rendant dans la section Multivendeurs de l espace d adminitration.
EOT;

$_['ms_mail_admin_subject_edit_product_awaiting_moderation'] = 'Produit modifié en attente de modération';
$_['ms_mail_admin_edit_product_awaiting_moderation'] = <<<EOT
Le produit %s du vendeur %s a été modifié est en attente de modération.

Vous pouvez l\ activier en vous rendant dans la section Multivendeurs de l espace d adminitration.
EOT;

$_['ms_mail_admin_subject_withdraw_request_submitted'] = 'Demande de paiement en attente de modération';
$_['ms_mail_admin_withdraw_request_submitted'] = <<<EOT
Une nouvelle demande de paiement été effectuée.

Vous pouvez l activier en vous rendant dans la section Multivendeurs / Finances de l espace d adminitration.
EOT;

// Success
$_['ms_success_product_published'] = 'Produit publié';
$_['ms_success_product_unpublished'] = 'Produit dépubliée';
$_['ms_success_product_created'] = 'Produit créé';
$_['ms_success_product_updated'] = 'Produit mise à jour';
$_['ms_success_product_deleted'] = 'Produit supprimé';

// Errors
$_['ms_error_sellerinfo_nickname_empty'] = 'Veuillez entrer un pseudo';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Le pseudo peut seulement comprendre des caractères alphnumériques (chiffres et lettre)';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Le pseudo peut seulement comprendre des symbols UTF-8 imprimables';
$_['ms_error_sellerinfo_nickname_latin'] = 'Le pseudo peut seulement comprendre des caractères alphnumériques et diacritiques';
$_['ms_error_sellerinfo_nickname_length'] = 'Le pseudo doit comprendre entre 4 et 50 caractères';
$_['ms_error_sellerinfo_nickname_taken'] = 'Ce pseudo est déjà pris';
$_['ms_error_sellerinfo_company_length'] = 'Le nom de l\'entreprise ne peut pas dépasser 50 caractères';
$_['ms_error_sellerinfo_description_length'] = 'La description ne peut pas dépasser les 1000 caractères';
$_['ms_error_sellerinfo_paypal'] = 'Adresse PayPal invalide';
$_['ms_error_sellerinfo_terms'] = 'Attention : vous devez accepter les %s.';
$_['ms_error_file_extension'] = 'Extention invalide';
$_['ms_error_file_type'] = 'Format de fichier invalide';
$_['ms_error_file_size'] = 'Fichier trop gros';
$_['ms_error_image_too_small'] = 'Les dimension de l\'image sont trop petites. La taille minimale acceptée est de : %s x %s (Largeur x Hauteur)';
$_['ms_error_image_too_big'] = 'Les dimension de l\'image sont trop grandes. La taille maximale acceptée est de : %s x %s (Largeur x Hauteur)';
$_['ms_error_file_upload_error'] = 'Erreur lors du téléchargement du fichier';
$_['ms_error_form_submit_error'] = 'Des erreurs se sont produites lors de l\'envoi du formulaire. Merci de nous contacter pour plus d\'information.';
$_['ms_error_form_notice'] = 'Merci de vérifier tous les champs pour corriger les erreurs.';
$_['ms_error_product_name_empty'] = 'Le nom du produit doit être renseigné';
$_['ms_error_product_name_length'] = 'Le nom du produit doit être compris entre %s et %s caractères';
$_['ms_error_product_description_empty'] = 'La description du produit doit être renseignée';
$_['ms_error_product_description_length'] = 'La description du produit doit être comprise entre %s et %s caractères';
$_['ms_error_product_tags_length'] = 'Ligne trop longue';
$_['ms_error_product_price_empty'] = 'Merci d\'indiquer un prix à votre produit';
$_['ms_error_product_price_invalid'] = 'Prix invalide';
$_['ms_error_product_price_low'] = 'Prix trop faible';
$_['ms_error_product_price_high'] = 'Prix trop élevé';
$_['ms_error_product_category_empty'] = 'Merci de sélectionner une catégorie';
$_['ms_error_product_model_empty'] = 'Le modèle de produit doit être renseigné';
$_['ms_error_product_model_length'] = 'Le modèle de produit doit être compris entre %s et %s caractères';
$_['ms_error_product_image_count'] = 'Merci d\'ajouter au minimum %s image(s) à votre produit';
$_['ms_error_product_download_count'] = 'Merci d\'ajouter au minimum %s téléchargement(s) à votre produit';
$_['ms_error_product_image_maximum'] = 'Pas plus de %s image(s) sont autorisées';
$_['ms_error_product_download_maximum'] = 'Pas plus de %s téléchargement(s) sont autorisés';
$_['ms_error_product_message_length'] = 'Le message ne peut pas dépasser 1000 caractères';
$_['ms_error_product_attribute_required'] = 'Cet attribut est requis';
$_['ms_error_product_attribute_long'] = 'Cette valeur ne peut pas dépasser %s symboles';
$_['ms_error_withdraw_amount'] = 'Montant invalide';
$_['ms_error_withdraw_balance'] = 'Pas assez de fonds dans votre Porte-Monnaie';
$_['ms_error_withdraw_minimum'] = 'Vous ne pouvez pas retirer moins que la limite minimale';
$_['ms_error_contact_email'] = 'Merci d\'indiquer une adresse email valide';
$_['ms_error_contact_captcha'] = 'Code captcha invalide';
$_['ms_error_contact_text'] = 'Le message ne peut pas dépasser 2000 caractères';
$_['ms_error_contact_allfields'] = 'Merci de remplir tous les champs';
$_['ms_error_invalid_quantity_discount_priority'] = 'Erreur dans les champs de priorité - Merci d\'entrer une valeur correcte.';
$_['ms_error_invalid_quantity_discount_quantity'] = 'La quantité pour les rabais est de minimum 2';
$_['ms_error_invalid_quantity_discount_price'] = 'Prix entrée invalide pour les rabais';
$_['ms_error_invalid_quantity_discount_dates'] = 'Le champs date doit être complété pour définir les périodes de rabais sur les quantités.';
$_['ms_error_invalid_special_price_priority'] = 'Erreur dans les champs de priorité - Merci d\'entrer une valeur correcte.';
$_['ms_error_invalid_special_price_price'] = 'Prix en réduction invalide';
$_['ms_error_invalid_special_price_dates'] = 'Le champs date doit être complété pour définir les périodes de réductions.';
$_['ms_error_seller_product'] = 'Vous ne pouvez pas ajouter vos propres produits à votre panier.';

// Account - General
$_['ms_account_unread_pm'] = 'Vous avez des messages privés non-lus';
$_['ms_account_unread_pms'] = 'Vous avez %s messages privés non-lus';
$_['ms_account_register_seller'] = 'Enregistrer le compte vendeur';
$_['ms_account_register_seller_success_heading'] = 'Votre compte vendeur a été créé !';
$_['ms_account_register_seller_success_message']  = '<p>Bienvenue %s !</p> <p>Félicitation ! Votre nouveau compte vendeur a été créé avec succès !</p> <p>Vous pouvez maintenant profiter de nos priviligès et commencer à votre vos produits.</p> <p>Si vous avez le moindre problème, <a href="%s">contactez-nous</a>.</p>';
$_['ms_account_register_seller_success_approval'] = '<p>Bienvenue %s !</p> <p>Votre compte vendeur a été créé est en attente de validation. Vous serez notifié par email dès qu\'il aura été validé.</p><p>Si vous avez le moindre problème, <a href="%s">contactez-nous</a>.</p>';

$_['ms_seller'] = 'Vendeur';
$_['ms_seller_forseller'] = 'Pour le vendeur';
$_['ms_account_dashboard'] = 'Mon tableau de bord';
$_['ms_account_seller_account'] = 'Mon compte vendeur';
$_['ms_account_sellerinfo'] = 'Mon profil vendeur';
$_['ms_account_sellerinfo_new'] = 'Nouveau compte vendeur';
$_['ms_account_newproduct'] = 'Mettre en vente un nouveau produit';
$_['ms_account_products'] = 'Gérer mes anonces';
$_['ms_account_transactions'] = 'Voir mes transactions financières';
$_['ms_account_orders'] = 'Voir mes ventes';
$_['ms_account_withdraw'] = 'Reversement financier';
$_['ms_account_stats'] = 'Statistiques';

// Account - New product
$_['ms_account_newproduct_heading'] = 'Nouveau produit';
$_['ms_account_newproduct_breadcrumbs'] = 'Nouveau produit';
//General Tab
$_['ms_account_product_tab_general'] = 'Général';
$_['ms_account_product_tab_specials'] = 'Réductions sur les prix';
$_['ms_account_product_tab_discounts'] = 'Rabais sur les quantités';
$_['ms_account_product_name_description'] = 'Nom et description';
$_['ms_account_product_name'] = 'Titre de l\'annonce';
$_['ms_account_product_name_note'] = 'Spécifiez un nom à votre produit';
$_['ms_account_product_description'] = 'Description';
$_['ms_account_product_description_note'] = 'Décrivez votre produit';
$_['ms_account_product_meta_description'] = 'Description Meta Tag';
$_['ms_account_product_meta_description_note'] = 'Spécifiez un description Meta Tag pour votre produit';
$_['ms_account_product_meta_keyword'] = 'Mots-clés Meta Tag';
$_['ms_account_product_meta_keyword_note'] = 'Sépcifiez des mots-clés Meta Tag pour votre produit';
$_['ms_account_product_tags'] = 'Tags';
$_['ms_account_product_tags_note'] = 'Spécifiez des tags pour votre produit.';
$_['ms_account_product_price_attributes'] = 'Prix et attributs';
$_['ms_account_product_price'] = 'Prix';
$_['ms_account_product_price_note'] = 'Choisissez un prix pour votre produit';
$_['ms_account_product_listing_flat'] = 'Les frais d\'ajout de ce produit sont de <span>%s</span>';
$_['ms_account_product_listing_percent'] = 'Les frais d\'ajout de ce produit sont basés sur le prix du produit. Les frais d\'ajout actuels sont de <span>%s</span>.';
$_['ms_account_product_listing_balance'] = 'Ce montant sera déduit du solde de votre Porte-Monnaie vendeur.';
$_['ms_account_product_listing_paypal'] = 'Vous serez redirigés vers la page de paiement PayPal après la validation du produit.';
$_['ms_account_product_listing_itemname'] = 'Frais de mise en vente de produits de %s';
$_['ms_account_product_listing_until'] = 'Ce produit sera mis en vente jusqu\'au %s';
$_['ms_account_product_category'] = 'Catégorie';
$_['ms_account_product_category_note'] = 'Sélectionnez une catégorie pour votre produit';
$_['ms_account_product_enable_shipping'] = 'Activer les options d\'expédition';
$_['ms_account_product_enable_shipping_note'] = 'Indiquez si votre produit doit être expédié ou non';
$_['ms_account_product_quantity'] = 'Quantité';
$_['ms_account_product_quantity_note']    = 'Indiquez le nombre d\'unités à vendre de votre produit';
$_['ms_account_product_files'] = 'Fichier';
$_['ms_account_product_download'] = 'Téléchargement';
$_['ms_account_product_download_note'] = 'Téléchargez des fichiers pour votre produit. Formats de fichiers autorisés: %s';
$_['ms_account_product_push'] = 'Envoyer une mise à jour à vos anciens acquéreurs';
$_['ms_account_product_push_note'] = 'Les téléchargements ajoutés et mis à jour seront disponibles pour vos anciens acquéreurs.';
$_['ms_account_product_image'] = 'Images';
$_['ms_account_product_image_note'] = 'Sélectionnez des images pour illustrer votre annonce. La première image sera utilisée en tant que miniature de présentation de votre produit. Vous pouvez changez l\'ordre des images en les déplaçant. Formats de fichiers autorisés : %s';
$_['ms_account_product_message_reviewer'] = 'Message au critique';
$_['ms_account_product_message'] = 'Message';
$_['ms_account_product_message_note'] = 'Votre message à destination du critique';
//Data Tab
$_['ms_account_product_tab_data'] = 'Données';
$_['ms_account_product_model'] = 'Modèle';
$_['ms_account_product_sku'] = 'UGS';
$_['ms_account_product_sku_note'] = 'Unité de Gestion des Stocks';
$_['ms_account_product_upc']  = 'CUP';
$_['ms_account_product_upc_note'] = 'Code Universel des Produits';
$_['ms_account_product_ean'] = 'EAN';
$_['ms_account_product_ean_note'] = 'European Article Number';
$_['ms_account_product_jan'] = 'JAN';
$_['ms_account_product_jan_note'] = 'Japanese Article Number';
$_['ms_account_product_isbn'] = 'ISBN';
$_['ms_account_product_isbn_note'] = 'International Standard Book Number';
$_['ms_account_product_mpn'] = 'MPN';
$_['ms_account_product_mpn_note'] = 'Manufacturer Part Number';
$_['ms_account_product_manufacturer'] = 'Fabricant';
$_['ms_account_product_manufacturer_note'] = '(Autocomplétion)';
$_['ms_account_product_tax_class'] = 'Catégorie fiscale';
$_['ms_account_product_date_available'] = 'Date de disponibilité';
$_['ms_account_product_stock_status'] = 'Statuts de la rupture de stock';
$_['ms_account_product_stock_status_note'] = 'Statut affiché lorsqu\'un produit est en rupture de stock';
$_['ms_account_product_subtract'] = 'Soustraire du stock';

// Options
$_['ms_account_product_tab_options'] = 'Options';
$_['ms_options_add'] = '+ Ajouter une option';
$_['ms_options_add_value'] = '+ Ajouter une valeur';
$_['ms_options_required'] = 'Rendre une option obligatoire';
$_['ms_options_price_prefix'] = 'Changer le préfixe du prix';
$_['ms_options_price'] = 'Prix...';
$_['ms_options_quantity'] = 'Quantité...';


$_['ms_account_product_manufacturer'] = 'Fabricant';
$_['ms_account_product_manufacturer_note'] = '(Autocomplétion)';
$_['ms_account_product_tax_class'] = 'Catégorie fiscale';
$_['ms_account_product_date_available'] = 'Date de disponibilité';
$_['ms_account_product_stock_status'] = 'Statuts de la rupture de stock';
$_['ms_account_product_stock_status_note'] = 'Statut affiché lorsqu\'un produit est en rupture de stock';
$_['ms_account_product_subtract'] = 'Soustraire du stock';

$_['ms_account_product_priority'] = 'Priorité';
$_['ms_account_product_date_start'] = 'Date de début';
$_['ms_account_product_date_end'] = 'Date de fin';
$_['ms_account_product_sandbox'] = 'Attention : la passerelle de paiement est en \'Mode bac-à-sable (Sandbox)\'. Votre compte ne sera pas débité.';



// Account - Edit product
$_['ms_account_editproduct_heading'] = 'Editer Produit';
$_['ms_account_editproduct_breadcrumbs'] = 'Editer Produit';

// Account - Clone product
$_['ms_account_cloneproduct_heading'] = 'Cloner Produit';
$_['ms_account_cloneproduct_breadcrumbs'] = 'Cloner Produit';

// Account - Relist product
$_['ms_account_relist_product_heading'] = 'Re-lister Produit';
$_['ms_account_relist_product_breadcrumbs'] = 'Re-lister Produit';

// Account - Seller
$_['ms_account_sellerinfo_heading'] = 'Mon profil vendeur';
$_['ms_account_sellerinfo_breadcrumbs'] = 'Mon profil vendeur';
$_['ms_account_sellerinfo_nickname'] = 'Pseudo';
$_['ms_account_sellerinfo_nickname_note'] = 'Indiquez votre pseudo vendeur.';
$_['ms_account_sellerinfo_description'] = 'Description';
$_['ms_account_sellerinfo_description_note'] = 'Décrivez-vous';
$_['ms_account_sellerinfo_company'] = 'Entreprise';
$_['ms_account_sellerinfo_company_note'] = 'Votre entreprise (optionel)';
$_['ms_account_sellerinfo_country'] = 'Pays';
$_['ms_account_sellerinfo_country_dont_display'] = 'Ne pas afficher mon pays';
$_['ms_account_sellerinfo_country_note'] = 'Sélectionnez votre pays.';
$_['ms_account_sellerinfo_zone'] = 'Région / Département';
$_['ms_account_sellerinfo_zone_select'] = 'Sélectionnez une Région / Département';
$_['ms_account_sellerinfo_zone_not_selected'] = 'Pas de Région / Département sélectionné';
$_['ms_account_sellerinfo_zone_note'] = 'Sélectionnez votre Région / Département dans la liste.';
$_['ms_account_sellerinfo_avatar'] = 'Avatar';
$_['ms_account_sellerinfo_avatar_note'] = 'Sélectionnez un avatar';
$_['ms_account_sellerinfo_banner'] = 'Bannière';
$_['ms_account_sellerinfo_banner_note'] = 'Ajoutez une bannière qui sera affichée sur votre page de profil';
$_['ms_account_sellerinfo_paypal'] = 'Adresse PayPal';
$_['ms_account_sellerinfo_paypal_note'] = 'Spécifiez votre adresse PayPal pour le paiement de vos ventes';
$_['ms_account_sellerinfo_reviewer_message'] = 'Message au critique';
$_['ms_account_sellerinfo_reviewer_message_note'] = 'Votre message au critique';
$_['ms_account_sellerinfo_terms'] = 'Accepter les termes et conditions';
$_['ms_account_sellerinfo_terms_note'] = 'J\'ai lu et j\'accepte les <a class="colorbox" href="%s" alt="%s"><b>%s</b></a>';
$_['ms_account_sellerinfo_fee_flat'] = 'Il ya des frais d\'inscription de <span>%s</span> pour devenir vendeur sur %s.';
$_['ms_account_sellerinfo_fee_balance'] = 'Ce montant sera déduit du solde initial de votre Porte-Monnaie.';
$_['ms_account_sellerinfo_fee_paypal'] = 'Vous serez redirigé vers la page de paiement PayPal après la validation du formulaire.';
$_['ms_account_sellerinfo_signup_itemname'] = 'Enregistrement du compte vendeur sur %s';
$_['ms_account_sellerinfo_saved'] = 'Données du compte vendeur sauvegardée.';

$_['ms_account_status'] = 'Votre compte vendeur est ';
$_['ms_account_status_tobeapproved'] = '<br />Vous pourrez utiliser votre compte dès qu\'il sera approuvé par la plateforme.';
$_['ms_account_status_please_fill_in'] = 'Merci de remplir le formulaire pour créer votre compte vendeur.';

$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'actif';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'inactif';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'désactivé';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'supprimé';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'en attente. Vous n\'avez pas payé les frais d\'inscription';

// Account - Products
$_['ms_account_products_heading'] = 'Mes produits en vente';
$_['ms_account_products_breadcrumbs'] = 'Mes produits en vente';
$_['ms_account_products_image'] = 'Image';
$_['ms_account_products_product'] = 'Produit';
$_['ms_account_products_sales'] = 'Ventes';
$_['ms_account_products_earnings'] = 'Gains';
$_['ms_account_products_status'] = 'Statut';
$_['ms_account_products_date'] = 'Date d\'ajout';
$_['ms_account_products_listing_until'] = 'Référencé jusqu\'au';
$_['ms_account_products_action'] = 'Action';
$_['ms_account_products_noproducts'] = 'Vous n\'avez pas encore de produit !';
$_['ms_account_products_confirmdelete'] = 'Etes-vous sûr de vouloir supprimer votre produit ?';

$_['ms_not_defined'] = 'Pas défini';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Activé';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Inactif';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Désactivé';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Supprimé';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'Frais d\'inscription de produit non payés';

// Account - Conversations and Messages
$_['ms_account_conversations'] = 'Conversations';
$_['ms_account_messages'] = 'Messages';

$_['ms_account_conversations_heading'] = 'Vos Conversations';
$_['ms_account_conversations_breadcrumbs'] = 'Vos Conversations';

$_['ms_account_conversations_status'] = 'Statut';
$_['ms_account_conversations_date_created'] = 'Date de création';
$_['ms_account_conversations_with'] = 'Conversation avec';
$_['ms_account_conversations_title'] = 'Titre';

$_['ms_conversation_title_product'] = 'Demande concernant le produit : %s';
$_['ms_conversation_title'] = 'Demande de %s';

$_['ms_account_conversations_read'] = 'Lu';
$_['ms_account_conversations_unread'] = 'Non lu';

$_['ms_account_messages_heading'] = 'Messages';
$_['ms_account_messages_breadcrumbs'] = 'Messages';

$_['ms_message_text'] = 'Votre message';
$_['ms_post_message'] = 'Message envoyé';

$_['ms_customer_does_not_exist'] = 'Compte client supprimé';
$_['ms_error_empty_message'] = 'Le message ne peut pas être laissé vide';

$_['ms_mail_subject_private_message'] = 'Nouveau message privé reçu';
$_['ms_mail_private_message'] = <<<EOT
Vous avez reçu un nouveau message privé de %s.

%s

%s

Vous pouvez répondre via l espace messagerie de votre compte.
EOT;


$_['ms_mail_subject_seller_vote'] = 'Noter le vendeur';
$_['ms_mail_seller_vote_message'] = 'Noter le vendeur';

// Account - Transactions
$_['ms_account_transactions_heading'] = 'Vos finances';
$_['ms_account_transactions_breadcrumbs'] = 'Vos finances';
$_['ms_account_transactions_balance'] = 'Le solde de votre Porte-Monnnaire est actuellement de :';
$_['ms_account_transactions_earnings'] = 'Vos gains à date :';
$_['ms_account_transactions_records'] = 'Historique du solde';
$_['ms_account_transactions_description'] = 'Description';
$_['ms_account_transactions_amount'] = 'Montant';
$_['ms_account_transactions_notransactions'] = 'Vous n\'avez pas encore effectué de transaction !';

// Payments
$_['ms_payment_payments'] = 'Paiements';
$_['ms_payment_order'] = 'Vente n°%s';
$_['ms_payment_type_' . MsPayment::TYPE_SIGNUP] = 'Frais d\'inscription';
$_['ms_payment_type_' . MsPayment::TYPE_LISTING] = 'Frais d\'annonce';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT] = 'Paiement manuel';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT_REQUEST] = 'Demande de reversement';
$_['ms_payment_type_' . MsPayment::TYPE_RECURRING] = 'Paiement récurrent';
$_['ms_payment_type_' . MsPayment::TYPE_SALE] = 'Vente';

$_['ms_payment_status_' . MsPayment::STATUS_UNPAID] = 'Non payé';
$_['ms_payment_status_' . MsPayment::STATUS_PAID] = 'Payé';

// Account - Orders
$_['ms_account_orders_heading'] = 'Mes ventes';
$_['ms_account_orders_breadcrumbs'] = 'Mes ventes';
$_['ms_account_orders_id'] = 'Vente n°';
$_['ms_account_orders_customer'] = 'Client';
$_['ms_account_orders_products'] = 'Produits';
$_['ms_account_orders_total'] = 'Montant total';
$_['ms_account_orders_view'] = 'Voir vente';
$_['ms_account_orders_noorders'] = 'Vous n\'avez pas encore de vente !';
$_['ms_account_orders_change_status'] = 'Changer le statut de la commande';

// Account - Dashboard
$_['ms_account_dashboard_heading'] = 'Mon tableau de bord vendeur';
$_['ms_account_dashboard_breadcrumbs'] = 'Tableau de bord vendeur';
$_['ms_account_dashboard_orders'] = 'Dernières ventes';
$_['ms_account_dashboard_overview'] = 'Vue générale';
$_['ms_account_dashboard_seller_group'] = 'Vous appartenez au groupe vendeur ';
$_['ms_account_dashboard_listing'] = 'Frais d\'annonce ';
$_['ms_account_dashboard_sale'] = 'Commission sur vente ';
$_['ms_account_dashboard_royalty'] = 'Vos revenus par vente ';
$_['ms_account_dashboard_stats'] = 'Statistiques';
$_['ms_account_dashboard_balance'] = 'Solde disponible ';
$_['ms_account_dashboard_total_sales'] = 'Ventes totales ';
$_['ms_account_dashboard_total_earnings'] = 'Gains totaux ';
$_['ms_account_dashboard_sales_month'] = 'Ventes du mois ';
$_['ms_account_dashboard_earnings_month'] = 'Gains du mois ';
$_['ms_account_dashboard_nav'] = 'Navigation rapide';
$_['ms_account_dashboard_nav_profile'] = 'Modifier mon profil vendeur';
$_['ms_account_dashboard_nav_product'] = 'Mettre en vente un nouveau produit';
$_['ms_account_dashboard_nav_products'] = 'Gérer mes annonces';
$_['ms_account_dashboard_nav_orders'] = 'Voir mes ventes';
$_['ms_account_dashboard_nav_balance'] = 'Voir mes transactions financières';
$_['ms_account_dashboard_nav_payout'] = 'Reversement financier';

// Account - Request withdrawal
$_['ms_account_withdraw_heading'] = 'Demander un reversement financier vers mon compte personnel';
$_['ms_account_withdraw_breadcrumbs'] = 'Demander un reversement';
$_['ms_account_withdraw_balance'] = 'Le solde disponible sur votre Porte-Monnaie est de :';
$_['ms_account_withdraw_balance_available'] = 'Disponible pour reversement vers mon compte PayPal ou bancaire :';
$_['ms_account_withdraw_minimum'] = 'Montant minimal de reversement :';
$_['ms_account_balance_reserved_formatted'] = '-%s en attente de retrait';
$_['ms_account_balance_waiting_formatted'] = '-%s en période d\'attente';
$_['ms_account_withdraw_description'] = 'Demande de versement par l\'intermédiaire de %s (%s) sur %s';
$_['ms_account_withdraw_amount'] = 'Montant :';
$_['ms_account_withdraw_amount_note'] = 'Merci de préciser le montant du paiement demandé';
$_['ms_account_withdraw_method'] = 'Méthode de paiement :';
$_['ms_account_withdraw_method_note'] = 'Merci de sélectrionner la méthode de paiement';
$_['ms_account_withdraw_method_paypal'] = 'PayPal';
$_['ms_account_withdraw_all'] = 'Tous les revenus actuellement disponibles';
$_['ms_account_withdraw_minimum_not_reached'] = 'Le solde de votre Porte-Monnaie est inférieur au montant minimum de paiement.';
$_['ms_account_withdraw_no_funds'] = 'Aucun fond à retirer.';
$_['ms_account_withdraw_no_paypal'] = 'Merci <a href="index.php?route=seller/account-profile">de spécifier en premier votre addrese PayPal</a> !';

// Account - Stats
$_['ms_account_stats_heading'] = 'Statistiques';
$_['ms_account_stats_breadcrumbs'] = 'Statistiques';
$_['ms_account_stats_tab_summary'] = 'Résumé';
$_['ms_account_stats_tab_by_product'] = 'Par Produit';
$_['ms_account_stats_tab_by_year'] = 'Par Année';
$_['ms_account_stats_summary_comment'] = 'Résumé de vos ventes';
$_['ms_account_stats_sales_data'] = 'Données des ventes';
$_['ms_account_stats_number_of_orders'] = 'Nombre de ventes';
$_['ms_account_stats_total_revenue'] = 'Gain total';
$_['ms_account_stats_average_order'] = 'Commande moyenne';
$_['ms_account_stats_statistics'] = 'Statistiques';
$_['ms_account_stats_grand_total'] = 'Grand total des ventes';
$_['ms_account_stats_product'] = 'Produit';
$_['ms_account_stats_sold'] = 'Vendu';
$_['ms_account_stats_total'] = 'Total';
$_['ms_account_stats_this_year'] = 'Cette année';
$_['ms_account_stats_year_comment'] = '<span id="sales_num">%s</span> Vente(s) par période donnée';
$_['ms_account_stats_show_orders'] = 'Voir les ventes de : ';
$_['ms_account_stats_month'] = 'Mois';
$_['ms_account_stats_num_of_orders'] = 'Nombre de ventes';
$_['ms_account_stats_total_r'] = 'Gain total';
$_['ms_account_stats_average_order'] = 'Moyenne des ventes';
$_['ms_account_stats_today'] = 'Aujourd\'hui, ';
$_['ms_account_stats_yesterday'] = 'Hier, ';
$_['ms_account_stats_daily_average'] = 'Moyenne quotidienne ';
$_['ms_account_stats_date_month_format'] = 'F Y';
$_['ms_account_stats_projected_totals'] = 'Totaux prévus pour ';
$_['ms_account_stats_grand_total_sales'] = 'Grand total des ventes';

// Product page - Seller information
$_['ms_catalog_product_sellerinfo'] = 'Information vendeur';
$_['ms_catalog_product_contact'] = 'Contacter le vendeur';

$_['ms_footer'] = '<br>MultiMerch Marketplace par <a href="http://multimerch.com/">multimerch.com</a>';

// Catalog - Sellers list
$_['ms_catalog_sellers_heading'] = 'Vendeurs';
$_['ms_catalog_sellers_country'] = 'Pays :';
$_['ms_catalog_sellers_website'] = 'Site internet :';
$_['ms_catalog_sellers_company'] = 'Entreprise :';
$_['ms_catalog_sellers_totalsales'] = 'Ventes :';
$_['ms_catalog_sellers_totalproducts'] = 'Produits :';
$_['ms_sort_country_desc'] = 'Pays (Z - A)';
$_['ms_sort_country_asc'] = 'Pays (A - Z)';
$_['ms_sort_nickname_desc'] = 'Nom (Z - A)';
$_['ms_sort_nickname_asc'] = 'Nom (A - Z)';

// Catalog - Seller profile page
$_['ms_catalog_sellers'] = 'Vendeurs';
$_['ms_catalog_sellers_empty'] = 'Il n\'y a pas encore de vendeur.';
$_['ms_catalog_seller_profile'] = 'Voir le profil';
$_['ms_catalog_seller_profile_heading'] = 'Profil de %s';
$_['ms_catalog_seller_profile_breadcrumbs'] = 'Profil de %s';
$_['ms_catalog_seller_profile_about_seller'] = 'À propos du vendeur';
$_['ms_catalog_seller_profile_products'] = 'Quelques produits du vendeur';
$_['ms_catalog_seller_profile_tab_products'] = 'Produits';

$_['ms_catalog_seller_profile_social'] = 'Profils sociaux';
$_['ms_catalog_seller_profile_country'] = 'Pays :';
$_['ms_catalog_seller_profile_zone'] = 'Région/Départements :';
$_['ms_catalog_seller_profile_website'] = 'Site internet :';
$_['ms_catalog_seller_profile_company'] = 'Entreprise :';
$_['ms_catalog_seller_profile_totalsales'] = 'Ventes totales :';
$_['ms_catalog_seller_profile_totalproducts'] = 'Produits totaux :';
$_['ms_catalog_seller_profile_view_products'] = 'Voir les produits';
$_['ms_catalog_seller_profile_view'] = 'Voir tous les produits de %s';

// Catalog - Seller's products list
$_['ms_catalog_seller_products_heading'] = 'Produits de %s';
$_['ms_catalog_seller_products_breadcrumbs'] = 'Produits de %s';
$_['ms_catalog_seller_products_empty'] = 'Ce vendeur n\'a pas encore de produit!';

// Catalog - Seller contact dialog
$_['ms_sellercontact_title'] = 'Envoyer un message au vendeur';
$_['ms_sellercontact_signin'] = 'Merci de vous <a href="%s">connecter</a> pour contacter %s';
$_['ms_sellercontact_sendto'] = 'Envoyer un message à %s';
$_['ms_sellercontact_text'] = 'Message : ';
$_['ms_sellercontact_captcha'] = 'Captcha';
$_['ms_sellercontact_sendmessage'] = 'Envoyer un message à %s';
$_['ms_sellercontact_close'] = 'Fermer';
$_['ms_sellercontact_send'] = 'Envoyer';
$_['ms_sellercontact_success'] = 'Votre message a bien été envoyé';

?>
