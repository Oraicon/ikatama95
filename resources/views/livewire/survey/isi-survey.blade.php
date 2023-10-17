<div>
   <div class="card border-0">
      <!--begin::Card body-->
      <div class="card-body">
         <div id="surveyContainer"></div>
      </div>
      <!--end::Card body-->
   </div>
</div>

@push('scripts')
   <script>
      $(document).ready(function() {
         initializeSurvey();
      });

      const themeJson = {
         "cssVariables": {
         "--sjs-general-backcolor": "rgba(255, 255, 255, 1)",
         "--sjs-general-backcolor-dark": "rgba(248, 248, 248, 1)",
         "--sjs-general-backcolor-dim": "rgba(243, 243, 243, 1)",
         "--sjs-general-backcolor-dim-light": "rgba(249, 249, 249, 1)",
         "--sjs-general-backcolor-dim-dark": "rgba(243, 243, 243, 1)",
         "--sjs-general-forecolor": "rgba(0, 0, 0, 0.91)",
         "--sjs-general-forecolor-light": "rgba(0, 0, 0, 0.45)",
         "--sjs-general-dim-forecolor": "rgba(0, 0, 0, 0.91)",
         "--sjs-general-dim-forecolor-light": "rgba(0, 0, 0, 0.45)",
         "--sjs-primary-backcolor": "#2F576D",
         "--sjs-primary-backcolor-light": "rgba(NaN, NaN, NaN, 0.1)",
         "--sjs-primary-backcolor-dark": "rgba(NaN, NaN, NaN, 1)",
         "--sjs-primary-forecolor": "rgba(255, 255, 255, 1)",
         "--sjs-primary-forecolor-light": "rgba(255, 255, 255, 0.25)",
         "--sjs-base-unit": "8px",
         "--sjs-corner-radius": "4px",
         "--sjs-secondary-backcolor": "rgba(255, 152, 20, 1)",
         "--sjs-secondary-backcolor-light": "rgba(255, 152, 20, 0.1)",
         "--sjs-secondary-backcolor-semi-light": "rgba(255, 152, 20, 0.25)",
         "--sjs-secondary-forecolor": "rgba(255, 255, 255, 1)",
         "--sjs-secondary-forecolor-light": "rgba(255, 255, 255, 0.25)",
         "--sjs-shadow-small": "0px 1px 2px 0px rgba(0, 0, 0, 0.15)",
         "--sjs-shadow-medium": "0px 2px 6px 0px rgba(0, 0, 0, 0.1)",
         "--sjs-shadow-large": "0px 8px 16px 0px rgba(0, 0, 0, 0.1)",
         "--sjs-shadow-inner": "inset 0px 1px 2px 0px rgba(0, 0, 0, 0.15)",
         "--sjs-border-light": "rgba(0, 0, 0, 0.09)",
         "--sjs-border-default": "rgba(0, 0, 0, 0.16)",
         "--sjs-border-inside": "rgba(0, 0, 0, 0.16)",
         "--sjs-special-red": "rgba(229, 10, 62, 1)",
         "--sjs-special-red-light": "rgba(229, 10, 62, 0.1)",
         "--sjs-special-red-forecolor": "rgba(255, 255, 255, 1)",
         "--sjs-special-green": "rgba(25, 179, 148, 1)",
         "--sjs-special-green-light": "rgba(25, 179, 148, 0.1)",
         "--sjs-special-green-forecolor": "rgba(255, 255, 255, 1)",
         "--sjs-special-blue": "rgba(67, 127, 217, 1)",
         "--sjs-special-blue-light": "rgba(67, 127, 217, 0.1)",
         "--sjs-special-blue-forecolor": "rgba(255, 255, 255, 1)",
         "--sjs-special-yellow": "rgba(255, 152, 20, 1)",
         "--sjs-special-yellow-light": "rgba(255, 152, 20, 0.1)",
         "--sjs-special-yellow-forecolor": "rgba(255, 255, 255, 1)",
         "--sjs-article-font-xx-large-fontSize": "64px",
         "--sjs-article-font-xx-large-textDecoration": "none",
         "--sjs-article-font-xx-large-fontWeight": "700",
         "--sjs-article-font-xx-large-fontStyle": "normal",
         "--sjs-article-font-xx-large-fontStretch": "normal",
         "--sjs-article-font-xx-large-letterSpacing": "0",
         "--sjs-article-font-xx-large-lineHeight": "64px",
         "--sjs-article-font-xx-large-paragraphIndent": "0px",
         "--sjs-article-font-xx-large-textCase": "none",
         "--sjs-article-font-x-large-fontSize": "48px",
         "--sjs-article-font-x-large-textDecoration": "none",
         "--sjs-article-font-x-large-fontWeight": "700",
         "--sjs-article-font-x-large-fontStyle": "normal",
         "--sjs-article-font-x-large-fontStretch": "normal",
         "--sjs-article-font-x-large-letterSpacing": "0",
         "--sjs-article-font-x-large-lineHeight": "56px",
         "--sjs-article-font-x-large-paragraphIndent": "0px",
         "--sjs-article-font-x-large-textCase": "none",
         "--sjs-article-font-large-fontSize": "32px",
         "--sjs-article-font-large-textDecoration": "none",
         "--sjs-article-font-large-fontWeight": "700",
         "--sjs-article-font-large-fontStyle": "normal",
         "--sjs-article-font-large-fontStretch": "normal",
         "--sjs-article-font-large-letterSpacing": "0",
         "--sjs-article-font-large-lineHeight": "40px",
         "--sjs-article-font-large-paragraphIndent": "0px",
         "--sjs-article-font-large-textCase": "none",
         "--sjs-article-font-medium-fontSize": "24px",
         "--sjs-article-font-medium-textDecoration": "none",
         "--sjs-article-font-medium-fontWeight": "700",
         "--sjs-article-font-medium-fontStyle": "normal",
         "--sjs-article-font-medium-fontStretch": "normal",
         "--sjs-article-font-medium-letterSpacing": "0",
         "--sjs-article-font-medium-lineHeight": "32px",
         "--sjs-article-font-medium-paragraphIndent": "0px",
         "--sjs-article-font-medium-textCase": "none",
         "--sjs-article-font-default-fontSize": "16px",
         "--sjs-article-font-default-textDecoration": "none",
         "--sjs-article-font-default-fontWeight": "400",
         "--sjs-article-font-default-fontStyle": "normal",
         "--sjs-article-font-default-fontStretch": "normal",
         "--sjs-article-font-default-letterSpacing": "0",
         "--sjs-article-font-default-lineHeight": "28px",
         "--sjs-article-font-default-paragraphIndent": "0px",
         "--sjs-article-font-default-textCase": "none"
      },
         "isPanelless": false,
         "backgroundImageFit": "cover",
         "backgroundImageAttachment": "scroll",
         "themeName": "default",
         "colorPalette": "light"
      }

      function initializeSurvey() {
        const surveyJson = {
            "title": "ALUMNI AKPOL 95 'PATRIATAMA'",
            // "completedHtml": '<div class="d-flex justify-content-center"> <div class="spinner-border" role="status"> <span class="sr-only">Loading...</span> </div> </div>',
            // "loadingHtml": '<div class="d-flex justify-content-center"> <div class="spinner-border" role="status"> <span class="sr-only">Loading...</span> </div> </div>',
            "logoPosition": "center",
            "pages": [
                {
                    "name": "page1",
                    "elements": [
                        {
                        "type": "file",
                        "name": "foto_taruna",
                        "title": "FOTO TARUNA",
                        "hideNumber": true,
                        "isRequired": true,
                        "requiredErrorText": "File harus diisi",
                        "acceptedTypes": ".jpg",
                        "waitForUpload": true,
                        "maxSize": 2000000,
                        "needConfirmRemoveFile": true
                    },
                    {
                        "type": "text",
                        "name": "nama",
                        "title": "NAMA (Gunakan huruf kapital)",
                        "hideNumber": true,
                        "isRequired": true
                    },
                    {
                    "type": "text",
                    "name": "panggilan",
                    "title": "PANGGILAN",
                    "hideNumber": true,
                    "isRequired": true
                    },
                    {
                    "type": "text",
                    "name": "tempat_lahir",
                    "title": "TEMPAT LAHIR",
                    "hideNumber": true,
                    "isRequired": true
                    },
                    {
                    "type": "text",
                    "name": "tanggal_lahir",
                    "title": "TANGGAL LAHIR",
                    "hideNumber": true,
                    "isRequired": true,
                    "inputType": "date"
                    },
                    {
                    "type": "radiogroup",
                    "name": "pangkat",
                    "title": "PANGKAT",
                    "hideNumber": true,
                    "isRequired": true,
                    "choices": [
                    {
                    "value": "jendral_polisi",
                    "text": "JENDRAL POLISI"
                    },
                    {
                    "value": "komisaris_jendral_polisi",
                    "text": "KOMISARIS JENDRAL POLISI"
                    },
                    {
                    "value": "inspektur_jenderal_polisi",
                    "text": "INSPEKTUR JENDERAL POLISI"
                    },
                    {
                    "value": "brigadir_jenderal_polisi",
                    "text": "BRIGADIR JENDERAL POLISI"
                    },
                    {
                    "value": "komisaris_besar_polisi",
                    "text": "KOMISARIS BESAR POLISI"
                    },
                    {
                    "value": "ajun_komisaris_besar_polisi",
                    "text": "AJUN KOMISARIS BESAR POLISI"
                    },
                    {
                    "value": "komisaris_polisi",
                    "text": "KOMISARIS POLISI"
                    },
                    {
                    "value": "ajun_komisaris_polisi",
                    "text": "AJUN KOMISARIS POLISI"
                    },
                    {
                    "value": "inspektur_polisi_satu",
                    "text": "INSPEKTUR POLISI SATU"
                    },
                    {
                    "value": "inspektur_polisi_dua",
                    "text": "INSPEKTUR POLISI DUA"
                    },
                    {
                    "value": "lainnya",
                    "text": "Lainnya"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "pangkat_lainnya",
                    "visibleIf": "{pangkat} = 'lainnya'",
                    "title": "PANGKAT LAINNYA",
                    "hideNumber": true,
                    "isRequired": true
                    },
                    {
                    "type": "text",
                    "name": "nrp",
                    "title": "NRP",
                    "hideNumber": true,
                    "isRequired": true,
                    "inputType": "number"
                    },
                    {
                    "type": "radiogroup",
                    "name": "status_kedinasan",
                    "title": "STATUS KEDINASAN",
                    "hideNumber": true,
                    "isRequired": true,
                    "choices": [
                    {
                    "value": "aktif",
                    "text": "Aktif"
                    },
                    {
                    "value": "tidak aktif",
                    "text": "Tidak Aktif"
                    },
                    {
                    "value": "lainnya",
                    "text": "Yang Lainnya"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "status_kedinasan_lainnya",
                    "visibleIf": "{status_kedinasan} = 'lainnya'",
                    "title": "STATUS KEDINASAN LAINNYA",
                    "hideNumber": true,
                    "isRequired": true
                    },
                    {
                    "type": "radiogroup",
                    "name": "status_pernikahan",
                    "title": "STATUS PERNIKAHAN",
                    "hideNumber": true,
                    "isRequired": true,
                    "choices": [
                    {
                    "value": "kawin",
                    "text": "Kawin"
                    },
                    {
                    "value": "belum kawin",
                    "text": "Belum Kawin"
                    },
                    {
                    "value": "cerai hidup",
                    "text": "Cerai Hidup"
                    },
                    {
                    "value": "cerai mati",
                    "text": "Cerai Mati"
                    },
                    {
                    "value": "lainnya",
                    "text": "Yang Lainnya"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "status_pernikahan_lainnya",
                    "visibleIf": "{status_pernikahan} = 'lainnya'",
                    "title": "STATUS PERNIKAHAN LAINNYA",
                    "hideNumber": true,
                    "isRequired": true
                    },
                    {
                    "type": "text",
                    "name": "jumlah_anak",
                    "title": "JUMLAH ANAK",
                    "hideNumber": true,
                    "isRequired": true,
                    "inputType": "number"
                    },
                    {
                    "type": "text",
                    "name": "telepon",
                    "title": "NO TELEPON",
                    "hideNumber": true,
                    "isRequired": true,
                    "inputType": "number"
                    },
                    {
                    "type": "text",
                    "name": "email",
                    "title": "EMAIL",
                    "hideNumber": true,
                    "isRequired": true,
                    "inputType": "email"
                    },
                    {
                    "type": "comment",
                    "name": "alamat",
                    "title": "ALAMAT",
                    "hideNumber": true,
                    "isRequired": true
                    },
                    {
                    "type": "text",
                    "name": "question13",
                    "title": "MOTTO",
                    "hideNumber": true
                    },
                    {
                    "type": "file",
                    "name": "foto_terkini",
                    "title": "FOTO TERKINI",
                    "hideNumber": true,
                    "isRequired": true,
                    "acceptedTypes": ".jpg",
                    "waitForUpload": true,
                    "maxSize": 2000000,
                    "needConfirmRemoveFile": true
                    },
                    {
                    "type": "text",
                    "name": "narasi_online",
                    "title": "NARASI ONLINE",
                    "hideNumber": true,
                    "isRequired": true
                    }
                    ]
                },
                {
                    "name": "page2",
                    "elements": [
                    {
                    "type": "file",
                    "name": "foto_keluarga",
                    "title": "FOTO KELUARGA",
                    "hideNumber": true,
                    "isRequired": true,
                    "acceptedTypes": ".jpg",
                    "waitForUpload": true,
                    "maxSize": 2000000,
                    "needConfirmRemoveFile": true
                    },
                    {
                    "type": "text",
                    "name": "narasi_keluarga",
                    "title": "NARASI KELUARGA",
                    "hideNumber": true,
                    "isRequired": true
                    },
                    {
                    "type": "file",
                    "name": "foto_anak_pertama",
                    "title": "FOTO ANAK PERTAMA",
                    "hideNumber": true,
                    "acceptedTypes": ".jpg",
                    "waitForUpload": true,
                    "maxSize": 2000000,
                    "needConfirmRemoveFile": true
                    },
                    {
                    "type": "text",
                    "name": "nama_anak_pertama",
                    "title": "NAMA ANAK PERTAMA (Gunakan huruf kapital)",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tempat_lahir_anak_pertama",
                    "title": "TEMPAT LAHIR ANAK PERTAMA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tanggal_lahir_anak_pertama",
                    "title": "TANGGAL LAHIR ANAK PERTAMA",
                    "hideNumber": true,
                    "inputType": "date"
                    },
                    {
                    "type": "radiogroup",
                    "name": "jenis_kelamin_anak_pertama",
                    "title": "JENIS KELAMIN ANAK PERTAMA",
                    "hideNumber": true,
                    "choices": [
                    {
                    "value": "Item 1",
                    "text": "LAKI-LAKI"
                    },
                    {
                    "value": "Item 11",
                    "text": "PEREMPUAN"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "pekerjaan_anak_pertama",
                    "title": "PEKERJAAN ANAK PERTAMA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "alamat_anak_pertama",
                    "title": "ALAMAT ANAK PERTAMA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "motto_anak_pertama",
                    "title": "MOTTO ANAK PERTAMA",
                    "hideNumber": true
                    },
                    {
                    "type": "file",
                    "name": "foto_anak_kedua",
                    "title": "FOTO ANAK KEDUA",
                    "hideNumber": true,
                    "acceptedTypes": ".jpg",
                    "waitForUpload": true,
                    "maxSize": 2000000,
                    "needConfirmRemoveFile": true
                    },
                    {
                    "type": "text",
                    "name": "nama_anak_kedua",
                    "title": "NAMA ANAK KEDUA (Gunakan huruf kapital)",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tempat_lahir_anak_kedua",
                    "title": "TEMPAT LAHIR ANAK KEDUA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tanggal_lahir_anak_kedua",
                    "title": "TANGGAL LAHIR ANAK KEDUA",
                    "hideNumber": true,
                    "inputType": "date"
                    },
                    {
                    "type": "radiogroup",
                    "name": "jenis_kelamin_anak_kedua",
                    "title": "JENIS KELAMIN ANAK KEDUA",
                    "hideNumber": true,
                    "choices": [
                    {
                    "value": "Item 1",
                    "text": "LAKI-LAKI"
                    },
                    {
                    "value": "Item 11",
                    "text": "PEREMPUAN"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "pekerjaan_anak_kedua",
                    "title": "PEKERJAAN ANAK KEDUA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "alamat_anak_kedua",
                    "title": "ALAMAT ANAK KEDUA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "motto_anak_kedua",
                    "title": "MOTTO ANAK KEDUA",
                    "hideNumber": true
                    },
                    {
                    "type": "file",
                    "name": "foto_anak_ketiga",
                    "title": "FOTO ANAK KETIGA",
                    "hideNumber": true,
                    "acceptedTypes": ".jpg",
                    "waitForUpload": true,
                    "maxSize": 2000000,
                    "needConfirmRemoveFile": true
                    },
                    {
                    "type": "text",
                    "name": "nama_anak_ketiga",
                    "title": "NAMA ANAK KETIGA (Gunakan huruf kapital)",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tempat_lahir_anak_ketiga",
                    "title": "TEMPAT LAHIR ANAK KETIGA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tanggal_lahir_anak_ketiga",
                    "title": "TANGGAL LAHIR ANAK KETIGA",
                    "hideNumber": true,
                    "inputType": "date"
                    },
                    {
                    "type": "radiogroup",
                    "name": "jenis_kelamin_anak_ketiga",
                    "title": "JENIS KELAMIN ANAK KETIGA",
                    "hideNumber": true,
                    "choices": [
                    {
                    "value": "Item 1",
                    "text": "LAKI-LAKI"
                    },
                    {
                    "value": "Item 11",
                    "text": "PEREMPUAN"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "pekerjaan_anak_ketiga",
                    "title": "PEKERJAAN ANAK KETIGA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "alamat_anak_ketiga",
                    "title": "ALAMAT ANAK KETIGA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "motto_anak_ketiga",
                    "title": "MOTTO ANAK KETIGA",
                    "hideNumber": true
                    },
                    {
                    "type": "file",
                    "name": "foto_anak_keempat",
                    "title": "FOTO ANAK KEEMPAT",
                    "hideNumber": true,
                    "acceptedTypes": ".jpg",
                    "waitForUpload": true,
                    "maxSize": 200000,
                    "needConfirmRemoveFile": true
                    },
                    {
                    "type": "text",
                    "name": "nama_anak_keempat",
                    "title": "NAMA ANAK KEEMPAT (Gunakan huruf kapital)",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tempat_lahir_anak_keempat",
                    "title": "TEMPAT LAHIR ANAK KEEMPAT",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tanggal_lahir_anak_keempat",
                    "title": "TANGGAL LAHIR ANAK KEEMPAT",
                    "hideNumber": true,
                    "inputType": "date"
                    },
                    {
                    "type": "radiogroup",
                    "name": "jenis_kelamin_anak_keempat",
                    "title": "JENIS KELAMIN ANAK KEEMPAT",
                    "hideNumber": true,
                    "choices": [
                    {
                    "value": "Item 1",
                    "text": "LAKI-LAKI"
                    },
                    {
                    "value": "Item 11",
                    "text": "PEREMPUAN"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "alamat_anak_keempat",
                    "title": "ALAMAT ANAK KEEMPAT",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "pekerjaan_anak_keempat",
                    "title": "PEKERJAAN ANAK KEEMPAT",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "motto_anak_keempat",
                    "title": "MOTTO ANAK KEEMPAT",
                    "hideNumber": true
                    },
                    {
                    "type": "file",
                    "name": "foto_anak_kelima",
                    "title": "FOTO ANAK KELIMA",
                    "hideNumber": true,
                    "acceptedTypes": ".jpg",
                    "waitForUpload": true,
                    "maxSize": 2000000,
                    "needConfirmRemoveFile": true
                    },
                    {
                    "type": "text",
                    "name": "nama_anak_kelima",
                    "title": "NAMA ANAK KELIMA (Gunakan huruf kapital)",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tempat_lahir_anak_kelima",
                    "title": "TEMPAT LAHIR ANAK KELIMA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "tanggal_lahir_anak_kelima",
                    "title": "TANGGAL LAHIR ANAK KELIMA",
                    "hideNumber": true,
                    "inputType": "date"
                    },
                    {
                    "type": "radiogroup",
                    "name": "question1",
                    "title": "JENIS KELAMIN ANAK KELIMA",
                    "hideNumber": true,
                    "choices": [
                    {
                    "value": "Item 1",
                    "text": "LAKI-LAKI"
                    },
                    {
                    "value": "Item 11",
                    "text": "PEREMPUAN"
                    }
                    ]
                    },
                    {
                    "type": "text",
                    "name": "pekerjaan_anak_kelima",
                    "title": "PEKERJAAN ANAK KELIMA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "alamat_anak_kelima",
                    "title": "ALAMAT ANAK KELIMA",
                    "hideNumber": true
                    },
                    {
                    "type": "text",
                    "name": "motto_anak_kelima",
                    "title": "MOTTO ANAK KELIMA",
                    "hideNumber": true
                    }
                    ],
                    "title": "DATA KELUARGA"
                },
         ]}

         const survey = new Survey.Model(surveyJson);
         survey.focusFirstQuestionAutomatic = false;
         survey.applyTheme(themeJson);
         function alertResults(sender) {
            const results = JSON.stringify(sender.data);
            menyimpan_data(results);
         }

         survey.onComplete.add(alertResults);

         $("#surveyContainer").Survey({
            model: survey
         });
      }

      function menyimpan_data(data_json) {
        var data_hasil_formulir = JSON.parse(data_json);

        $.ajax({
            type: "POST",
            url: "/api/simpan_formulir", // Use the correct URL
            data: JSON.stringify(data_hasil_formulir),
            contentType: "application/json",
            success: function(response) {
                console.log(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Error:", textStatus, errorThrown);
            }
        });
      }
   </script>
@endpush
