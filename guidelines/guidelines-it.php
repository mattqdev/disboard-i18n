<?php
/*
 * DO NOT EDIT ANY CODE WITHIN <?php ?> <?= ?> TAGS
 * YOU CAN TRANSLATE THEM IN MESSAGE FILES
 */
use yii\helpers\Url;

$this->context->layout = 'focus';

$this->title = Yii::t('app', 'Linee guida');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Ultima modifica: 2020-04-10
</p>
<p>
    Per mantenere una community sicura, ci sono alcune linee guida che devi seguire <br>
    Utilizzando DISBOARD, accetti le seguenti linee guida:
</p>
<ul>
    <li>
        L'uso di parolacce, termini volgari o contenuti NSFW (contenuti sessuali, a nostra discrezione) nei meta di un server (titolo, descrizione e immagine), nelle recensioni o in altri contenuti visibili agli utenti di DISBOARD non è consentito. Questo comporterà la rimozione del contenuto; tuttavia, potrai ripubblicarlo utilizzando un linguaggio appropriato.
    </li>
    <li>
        Non puoi violare alcuna legge o regolamento del tuo Paese di residenza né promuoverne la violazione.
    </li>
    <li>
        I server che violano le <a href="https://discordapp.com/guidelines" target="_blank">Linee guida della community di Discord</a> non sono consentiti.
    </li>
    <li>
        L'uso di bot o altri script per eseguire automaticamente azioni su DISBOARD, come il bump di un server ("auto-bump"), non è consentito. Il bump, la creazione di recensioni, ecc. devono essere effettuati manualmente.
    </li>
    <li>
        Non puoi elencare server che hanno come unico scopo il reindirizzamento o la pubblicità di altri server o che non hanno contenuti (a nostra discrezione).
    </li>
    <li>
        Non puoi ricompensare o costringere gli utenti a compiere azioni su DISBOARD. Ad esempio, non puoi ricompensare i tuoi utenti per aver scritto una recensione positiva su un server o costringerli a bumpare un server.
    </li>
    <li>
        Non puoi creare più account Discord per inviare più recensioni. Pubblica solo 1 recensione per persona.
    </li>
    <li>
        Tutti i server basati principalmente su contenuti NSFW (contenuti sessuali, a nostra discrezione) devono essere contrassegnati come "NSFW" su DISBOARD.
    </li>
</ul>

<p>
    Vedi anche i nostri <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'Termini di servizio'); ?></a>
</p>
