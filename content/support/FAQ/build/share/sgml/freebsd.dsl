<!-- $FreeBSD: doc/share/sgml/freebsd.dsl,v 1.31 2001/06/02 23:02:13 dd Exp $ -->

<!DOCTYPE style-sheet PUBLIC "-//James Clark//DTD DSSSL Style Sheet//EN" [
<!ENTITY % output.html		"IGNORE">
<!ENTITY % output.html.images 	"IGNORE">
<!ENTITY % output.print 	"IGNORE">
<!ENTITY % output.print.pdf 	"IGNORE">

<![ %output.html; [
<!ENTITY docbook.dsl PUBLIC "-//Norman Walsh//DOCUMENT DocBook HTML Stylesheet//EN" CDATA DSSSL>
]]>
<![ %output.print; [
<!ENTITY docbook.dsl PUBLIC "-//Norman Walsh//DOCUMENT DocBook Print Stylesheet//EN" CDATA DSSSL>

]]>
]>

<style-sheet>
  <style-specification use="docbook">
    <style-specification-body>
      <!-- HTML only .................................................... -->
      
      <![ %output.html; [
        <!-- Configure the stylesheet using documented variables -->

        (define %gentext-nav-use-tables%
          ;; Use tables to build the navigation headers and footers?
          #t)

        (define %html-ext%
          ;; Default extension for HTML output files
          ".html")

        (define %shade-verbatim%
          ;; Should verbatim environments be shaded?
          #f)

        (define %use-id-as-filename%
          ;; Use ID attributes as name for component HTML files?
          #t)
 
        (define %root-filename%
          ;; Name for the root HTML document
          "index")

        (define html-manifest
          ;; Write a manifest?
          #f)

        (define %generate-legalnotice-link%
          ;; Should legal notices be a link to a separate file?
          ;;
          ;; Naturally, this has no effect if you're building one big
          ;; HTML file.
          #t)

        (define (book-titlepage-recto-elements)
          (list (normalize "title")
                (normalize "subtitle")
                (normalize "graphic")
                (normalize "mediaobject")
                (normalize "corpauthor")
                (normalize "authorgroup")
                (normalize "author")
                (normalize "editor")
                (normalize "copyright")
                (normalize "abstract")
                (normalize "legalnotice")
                (normalize "isbn")))

        <!-- This is the text to display at the bottom of each page.
             Defaults to nothing.  The individual stylesheets should
             redefine this as necessary. -->
        (define ($email-footer$)
          (empty-sosofo))

        <!-- This code handles displaying $email-footer$ at the bottom
             of each page.

             If "nochunks" is turned on then we make sure that an <hr>
             is shown first.

             Then create a centered paragraph ("<p>"), and reduce the font
             size ("<small>").  Then run $email-footer$, which should
             create the text and links as necessary. -->
	(define ($html-body-end$)
          (if (equal? $email-footer$ (normalize ""))
            (empty-sosofo)
            (make sequence
              (if nochunks
                  (make empty-element gi: "hr")
                  (empty-sosofo))
              ($email-footer$))))

        (define %refentry-xref-link%
          ;; REFENTRY refentry-xref-link
          ;; PURP Generate URL links when cross-referencing RefEntrys?
          ;; DESC
          ;; If true, a web link will be generated, presumably
          ;; to an online man->HTML gateway.  The text of the link is
          ;; generated by the $create-refentry-xref-link$ function.
          ;; /DESC
          ;; AUTHOR N/A
          ;; /REFENTRY
          #f)

        ; Empty function to quiet warnings
        (define ($create-refentry-xref-link$ refentrytitle manvolnum)
          (literal ""))

        (element citerefentry
          (let* ((refentrytitle	(select-elements (children (current-node))
                                                 (normalize "refentrytitle")))
                 (manvolnum	(select-elements (children (current-node))
						 (normalize "manvolnum")))
                 (href		($create-refentry-xref-link$   
                                                 (data refentrytitle)
                                                 (data manvolnum))))
	    (if %refentry-xref-link%
	      (create-link (list (list "HREF" href))
                (if %refentry-xref-italic%
                  ($italic-seq$)
                  ($charseq$)))
              (if %refentry-xref-italic%
                ($italic-seq$)
                ($charseq$)))))
      ]]>

      <!-- HTML with images  ............................................ -->

      <![ %output.html.images [

        (define %graphic-default-extension%
          "png")

        (define %callout-graphics%
          ;; Use graphics in callouts?
          #t)

        (define %callout-graphics-ext%
          ;; The extension to use for callout images.  This is an extension
          ;; to the stylesheets, they do not support this functionality
          ;; natively.
          ".png")

        (define %callout-graphics-path%
          ;; Path to callout graphics
          "./imagelib/callouts/")

        ;; Redefine $callout-bug$ to support the %callout-graphic-ext%
        ;; variable.
        (define ($callout-bug$ conumber)
	  (let ((number (if conumber (format-number conumber "1") "0")))
	    (if conumber
		(if %callout-graphics%
	            (if (<= conumber %callout-graphics-number-limit%)
		        (make empty-element gi: "IMG"
			      attributes: (list (list "SRC"
				                      (root-rel-path
					               (string-append
						        %callout-graphics-path%
							number
	                                                %callout-graphics-ext%)))
		                                (list "HSPACE" "0")
			                        (list "VSPACE" "0")
				                (list "BORDER" "0")
					        (list "ALT"
						      (string-append
	                                               "(" number ")"))))
		        (make element gi: "B"
			      (literal "(" (format-number conumber "1") ")")))
	            (make element gi: "B"
		          (literal "(" (format-number conumber "1") ")")))
	        (make element gi: "B"
	       (literal "(??)")))))
      ]]>

      <!-- Print only ................................................... --> 
      <![ %output.print; [
        (define (toc-depth nd)
          (if (string=? (gi nd) (normalize "book"))
              3
              1))
 
        (define %body-start-indent% 
          0pi)

        (define (book-titlepage-verso-elements)
          (list (normalize "title")
                (normalize "subtitle")
                (normalize "corpauthor")
                (normalize "authorgroup")
                (normalize "author")
                (normalize "editor")
                (normalize "edition")
                (normalize "pubdate")
                (normalize "copyright")
                (normalize "abstract")
                (normalize "legalnotice")
                (normalize "revhistory")
                (normalize "isbn")))

        ;; Norm's stylesheets are smart about working out what sort of
        ;; object to display.  But this bites us.  Since we know that the
        ;; first item is going to be displayable, always use that.
        (define (find-displayable-object objlist notlist extlist)
          (let loop ((nl objlist))
            (if (node-list-empty? nl)
              (empty-node-list)
                (let* ((objdata  (node-list-filter-by-gi
                                  (children (node-list-first nl))
                                  (list (normalize "videodata")
                                        (normalize "audiodata")
                                        (normalize "imagedata"))))
                       (filename (data-filename objdata))
                       (extension (file-extension filename))
                       (notation (attribute-string (normalize "format") objdata)))
                  (node-list-first nl)))))

        ;; When selecting a filename to use, don't append the default
        ;; extension, instead, just use the bare filename, and let TeX
        ;; work it out.  jadetex will use the .eps file, while pdfjadetex
        ;; will use the .png file automatically.
        (define (graphic-file filename)
          (let ((ext (file-extension filename)))
            (if (or tex-backend   ;; TeX can work this out itself
                    (not filename)
                    (not %graphic-default-extension%)
                    (member ext %graphic-extensions%))
                 filename
                 (string-append filename "." %graphic-default-extension%))))

        ;; Including bitmaps in the PS and PDF output tends to scale them
        ;; horribly.  The solution is to scale them down by 50%.
        ;;
        ;; You could do this with 'imagedata scale="50"'  in the source,
        ;; but that will affect all the output formats that we use (because
        ;; there is only one 'imagedata' per image).
        ;;
        ;; Solution is to have the authors include the "FORMAT" attribute,
        ;; set to PNG or EPS as appropriate, but to omit the extension.
	;; If we're using the tex-backend, and the FORMAT is PNG, and the
        ;; author hasn't already set a scale, then set scale to 0.5.
        ;; Otherwise, use the supplied scale, or 1, as appropriate.
        (define ($graphic$ fileref
                           #!optional (display #f) (format #f)
                                      (scale #f)   (align #f))
          (let* ((graphic-format (if format format ""))
                 (graphic-scale  (if scale
                                     (/  (string->number scale) 100)
                                     (if (and tex-backend
                                              (equal? graphic-format "PNG"))
                                          0.5 1)))
                 (graphic-align  (cond ((equal? align (normalize "center"))
                                        'center)
                                       ((equal? align (normalize "right"))
                                        'end)
                                       (else
                                        'start))))
           (make external-graphic
              entity-system-id: (graphic-file fileref)
              notation-system-id: graphic-format
              scale: graphic-scale
              display?: display
              display-alignment: graphic-align)))
      ]]>

      <![ %output.print.pdf; [

      ]]>

      <!-- Both sets of stylesheets ..................................... -->

      (define %section-autolabel%
        #t)

      (define %may-format-variablelist-as-table%
        #f)
      
      (define %indent-programlisting-lines%
        "    ")
 
      (define %indent-screen-lines%
        "    ")

      (define (article-titlepage-recto-elements)
        (list (normalize "title")
              (normalize "subtitle")
              (normalize "corpauthor")
              (normalize "authorgroup")
              (normalize "author")
              (normalize "releaseinfo")
              (normalize "copyright")
              (normalize "pubdate")
              (normalize "revhistory")
              (normalize "legalnotice")
              (normalize "abstract")))

      (define %admon-graphics%
        ;; Use graphics in admonitions?
        #f)

      (define %admon-graphics-path%
        ;; Path to admonition images
        "./imagelib/admon/")

      (define ($admon-graphic$ #!optional (nd (current-node)))
        ;; Admonition graphic file
        (string-append %admon-graphics-path% (case-fold-down (gi nd)) ".png"))

      <!-- Slightly deeper customisations -->

      <!-- I want things marked up with 'sgmltag' eg., 

              <para>You can use <sgmltag>para</sgmltag> to indicate
                paragraphs.</para>

           to automatically have the opening and closing braces inserted,
           and it should be in a mono-spaced font. -->

      (element sgmltag ($mono-seq$
          (make sequence
            (literal "<")
            (process-children)
            (literal ">"))))

      <!-- Add double quotes around <errorname> text. -->

      (element errorname
        (make sequence
          <![ %output.html;  [ (literal "``") ]]>
          ($mono-seq$ (process-children))
          <![ %output.html;  [ (literal "''") ]]>
          ))

      <!-- John Fieber's 'instant' translation specification had 
           '<command>' rendered in a mono-space font, and '<application>'
           rendered in bold. 

           Norm's stylesheet doesn't do this (although '<command>' is 
           rendered in bold).

           Configure the stylesheet to behave more like John's. -->

      (element command ($mono-seq$))

      (element application ($bold-seq$))

      <!-- Warnings and cautions are put in boxed tables to make them stand
           out. The same effect can be better achieved using CSS or similar,
           so have them treated the same as <important>, <note>, and <tip>
      -->
      (element warning ($admonition$))
      (element (warning title) (empty-sosofo))
      (element (warning para) ($admonpara$))
      (element (warning simpara) ($admonpara$))
      (element caution ($admonition$))
      (element (caution title) (empty-sosofo))
      (element (caution para) ($admonpara$))
      (element (caution simpara) ($admonpara$))

      (define (local-en-label-title-sep)
        (list
          (list (normalize "warning")		": ")
	  (list (normalize "caution")		": ")
          ))

      <!-- Tell the stylesheet about our local customisations -->
      
      (element hostid ($mono-seq$))
      (element username ($mono-seq$))
      (element groupname ($mono-seq$))
      (element devicename ($mono-seq$))
      (element maketarget ($mono-seq$))
      (element makevar ($mono-seq$))

      <!-- For the HTML version, display the questions in a bigger, bolder
           font. -->

      <![ %output.html; [
      (element question
        (let* ((chlist   (children (current-node)))
               (firstch  (node-list-first chlist))
               (restch   (node-list-rest chlist)))
          (make element gi: "DIV"
                attributes: (list (list "CLASS" (gi)))
                (make element gi: "P" 
                      (make element gi: "BIG"
                            (make element gi: "A"
                                  attributes: (list (list "NAME" (element-id)))
                                 (empty-sosofo))
                             (make element gi: "B"
                                   (literal (question-answer-label
                                            (current-node)) " ")
                                    (process-node-list (children firstch)))))
                (process-node-list restch))))
      ]]>

      <!-- Override generate-anchor.  This is used to generate a unique ID for
           each element that can be linked to.  The element-id function calls
           this one if there's no ID attribute that it can use.  Normally, we
           would just use the current element number.  However, if it's a
           a question then use the question's number, as determined by the
           question-answer-label function.

           This generates anchors of the form "Qx.y.", where x.y is the
           question label.  This will probably break if question-answer-label
           is changed to generate something that might be the same for two
           different questions (for example, if question numbering restarts
           for each qandaset. -->
      (define (generate-anchor #!optional (nd (current-node)))
        (cond
          ((equal? (gi nd) (normalize "question"))
            (string-append "Q" (question-answer-label)))
          (else
            (string-append "AEN" (number->string (all-element-number nd))))))
      
      (define (xref-biblioentry target)
        (let* ((abbrev (node-list-first
                        (node-list-filter-out-pis (children target))))
               (label  (attribute-string (normalize "xreflabel") target)))
                    
          (if biblio-xref-title
              (let* ((citetitles (select-elements (descendants target)
                                                  (normalize "citetitle")))
                     (titles     (select-elements (descendants target)
                                                  (normalize "title")))
                     (isbn       (select-elements (descendants target)
                                                  (normalize "isbn")))
                     (publisher  (select-elements (descendants target)
                                                  (normalize "publishername")))
                     (title      (if (node-list-empty? citetitles)
                                     (node-list-first titles)
                                     (node-list-first citetitles))))
                (with-mode xref-title-mode
                  (make sequence
                    (process-node-list title))))
              (if biblio-number
                  (make sequence
                    (literal "[" (number->string (bibentry-number target)) "]"))
                  (if label
                      (make sequence
                        (literal "[" label "]"))
                      (if (equal? (gi abbrev) (normalize "abbrev"))
                          (make sequence
                            (process-node-list abbrev))
                          (make sequence
                            (literal "[" (id target) "]"))))))))
 
       <!-- The (create-link) procedure should be used by all FreeBSD
 	   stylesheets to create links.  It calls (can-link-here) to
 	   determine whether it's okay to make a link in the current
 	   position.
 
 	   This check is necessary because links aren't allowed in,
 	   for example, <question> tags since the latter cause links
 	   to be created by themselves.  Obviously, nested links lead
 	   to all kinds of evil.  This normally wouldn't be a problem
 	   since no one in their right mind will put a <ulink> or
 	   <link> in a <question>, but it comes up when someone uses,
 	   say, a man page entity (e.g., &man.ls.1;); the latter may
 	   cause a link to be created, but its use inside a <question>
 	   is perfectly legal.
 
 	   The (can-link-here) routine isn't perfect; in fact, it's a
 	   hack and an ugly one at that.  Ideally, it would detect if
 	   the currect output would wind up in an <a> tag and return
 	   #f if that's the case.  Slightly less ideally it would
 	   check the current mode and return #f if, say, we're
 	   currently in TOC mode.  Right now, it makes a best guess
 	   attempt at guessing which tags might cause links to be
 	   generated.  -->
      (define (can-link-here)
 	(cond ((has-ancestor-member? (current-node)
				     '("TITLE" "QUESTION")) #f)
 	      (#t #t)))
 
      (define (create-link attrlist target)
 	(if (can-link-here)
 	    (make element gi: "A"
 		  attributes: attrlist
 		  target)
	    target))
    </style-specification-body>
  </style-specification>
      
  <external-specification id="docbook" document="docbook.dsl">
</style-sheet>
