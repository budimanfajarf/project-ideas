<?php

use Illuminate\Database\Seeder;

class GithubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Github::create([
            'path' => 'Example/Hello.md',
            'json' => '{
                "name": "Bin2Dec-App.md",
                "path": "Projects/1-Beginner/Bin2Dec-App.md",
                "sha": "9bb4503f0935378392b34252916b9533812982a9",
                "size": 2133,
                "url": "https://api.github.com/repos/florinpop17/app-ideas/contents/Projects/1-Beginner/Bin2Dec-App.md?ref=master",
                "html_url": "https://github.com/florinpop17/app-ideas/blob/master/Projects/1-Beginner/Bin2Dec-App.md",
                "git_url": "https://api.github.com/repos/florinpop17/app-ideas/git/blobs/9bb4503f0935378392b34252916b9533812982a9",
                "download_url": "https://raw.githubusercontent.com/florinpop17/app-ideas/master/Projects/1-Beginner/Bin2Dec-App.md",
                "type": "file",
                "content": "IyBCaW4yRGVjCgoqKlRpZXI6KiogMS1CZWdpbm5lcgoKQmluYXJ5IGlzIHRo\nZSBudW1iZXIgc3lzdGVtIGFsbCBkaWdpdGFsIGNvbXB1dGVycyBhcmUgYmFz\nZWQgb24uClRoZXJlZm9yZSBpdCdzIGltcG9ydGFudCBmb3IgZGV2ZWxvcGVy\ncyB0byB1bmRlcnN0YW5kIGJpbmFyeSwgb3IgYmFzZSAyLAptYXRoZW1hdGlj\ncy4gVGhlIHB1cnBvc2Ugb2YgQmluMkRlYyBpcyB0byBwcm92aWRlIHByYWN0\naWNlIGFuZAp1bmRlcnN0YW5kaW5nIG9mIGhvdyBiaW5hcnkgY2FsY3VsYXRp\nb25zLgoKQmluMkRlYyBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgc3RyaW5n\ncyBvZiB1cCB0byA4IGJpbmFyeSBkaWdpdHMsIDAncwphbmQgMSdzLCBpbiBh\nbnkgc2VxdWVuY2UgYW5kIHRoZW4gZGlzcGxheXMgaXRzIGRlY2ltYWwgZXF1\naXZhbGVudC4KClRoaXMgY2hhbGxlbmdlIHJlcXVpcmVzIHRoYXQgdGhlIGRl\ndmVsb3BlciBpbXBsZW1lbnRpbmcgaXQgZm9sbG93IHRoZXNlCmNvbnN0cmFp\nbnRzOgoKLSAgIEFycmF5cyBtYXkgbm90IGJlIHVzZWQgdG8gY29udGFpbiB0\naGUgYmluYXJ5IGRpZ2l0cyBlbnRlcmVkIGJ5IHRoZSB1c2VyCi0gICBEZXRl\ncm1pbmluZyB0aGUgZGVjaW1hbCBlcXVpdmFsZW50IG9mIGEgcGFydGljdWxh\nciBiaW5hcnkgZGlnaXQgaW4gdGhlCiAgICBzZXF1ZW5jZSBtdXN0IGJlIGNh\nbGN1bGF0ZWQgdXNpbmcgYSBzaW5nbGUgbWF0aGVtYXRpY2FsIGZ1bmN0aW9u\nLCBmb3IKICAgIGV4YW1wbGUgdGhlIG5hdHVyYWwgbG9nYXJpdGhtLiBJdCdz\nIHVwIHRvIHlvdSB0byBmaWd1cmUgb3V0IHdoaWNoIGZ1bmN0aW9uCiAgICB0\nbyB1c2UuCgojIyBVc2VyIFN0b3JpZXMKCi0gICBbIF0gVXNlciBjYW4gZW50\nZXIgdXAgdG8gOCBiaW5hcnkgZGlnaXRzIGluIG9uZSBpbnB1dCBmaWVsZAot\nICAgWyBdIFVzZXIgbXVzdCBiZSBub3RpZmllZCBpZiBhbnl0aGluZyBvdGhl\nciB0aGFuIGEgMCBvciAxIHdhcyBlbnRlcmVkCi0gICBbIF0gVXNlciB2aWV3\ncyB0aGUgcmVzdWx0cyBpbiBhIHNpbmdsZSBvdXRwdXQgZmllbGQgY29udGFp\nbmluZyB0aGUgZGVjaW1hbCAoYmFzZSAxMCkgZXF1aXZhbGVudCBvZiB0aGUg\nYmluYXJ5IG51bWJlciB0aGF0IHdhcyBlbnRlcmVkCgojIyBCb251cyBmZWF0\ndXJlcwoKLSAgIFsgXSBVc2VyIGNhbiBlbnRlciBhIHZhcmlhYmxlIG51bWJl\nciBvZiBiaW5hcnkgZGlnaXRzCgojIyBVc2VmdWwgbGlua3MgYW5kIHJlc291\ncmNlcwoKW0JpbmFyeSBudW1iZXIgc3lzdGVtXShodHRwczovL2VuLndpa2lw\nZWRpYS5vcmcvd2lraS9CaW5hcnlfbnVtYmVyKQoKIyMgRXhhbXBsZSBwcm9q\nZWN0cwoKVHJ5IG5vdCB0byB2aWV3IHRoaXMgdW50aWwgeW91J3ZlIGRldmVs\nb3BlZCB5b3VyIG93biBzb2x1dGlvbjoKCi0gICBbQmluYXJ5IHRvIGRlY2lt\nYWwgY29udmVyc2lvbiBwcm9ncmFtIGZvciBiZWdpbm5lcnNdKGh0dHBzOi8v\nd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9WU1JQUxRRTI2S1EpCi0gICBbQmlu\nYXJ5IHRvIERlY2ltYWwgY29udmVydGVyIHVzaW5nIFJlYWN0XShodHRwczov\nL2dpdGh1Yi5jb20vZW1haWwydmltYWxyYWovQmluMkRlYykKLSAgIFtCaW5h\ncnkgdG8gRGVjaW1hbCBjb252ZXJ0ZXIgd2l0aCBwbGFpbiBodG1sLCBqcyBh\nbmQgY3NzXShodHRwczovL2dyZnJlaXJlLmdpdGh1Yi5pby9CaW4yRGVjLykK\nLSAgIFtCaW5hcnkgdG8gRGVjaW1hbCBjb252ZXJ0ZXIgdXNpbmcgRmx1dHRl\nciAmIERhcnRdKGh0dHBzOi8vZ2l0aHViLmNvbS9pc3JhZWxzcy9BcHBJZGVh\nc0NvbGxlY3Rpb24vdHJlZS9tYXN0ZXIvVGllcjEvQmluMkRlYykKICAgIC0g\nICBbTGl2ZSBwcmV2aWV3IGJ1aWx0IHdpdGggRmx1dHRlciBmb3IgV2ViXSho\ndHRwczovL2JpbjJkZWMud2ViLmFwcC8jLykKLSAgIFtCaW5hcnkgdG8gRGVj\naW1hbCBjb252ZXJ0ZXIgdXNpbmcgUmVhY3RdKGh0dHBzOi8vZ2l0aHViLmNv\nbS9nZW9mZmN0bi9CaW4yRGVjKQotICAgW01hdHJpeC1saWtlIEJpbmFyeSB0\nbyBEZWNpbWFsIGNvbnZlcnRlciB1c2luZyBBbmd1bGFyXShodHRwczovL2dp\ndGh1Yi5jb20vWmFuZ2llZldpbnMvTWF0cml4QmluMkRlYykKICAgIC0gICBb\nTGl2ZSBwcmV2aWV3IG9uIGhlcm9rdV0oaHR0cHM6Ly9tYXRyaXgtYmluMmRl\nYy5oZXJva3VhcHAuY29tLykK\n",
                "encoding": "base64",
                "_links": {
                        "self": "https://api.github.com/repos/florinpop17/app-ideas/contents/Projects/1-Beginner/Bin2Dec-App.md?ref=master",
                        "git": "https://api.github.com/repos/florinpop17/app-ideas/git/blobs/9bb4503f0935378392b34252916b9533812982a9",
                        "html": "https://github.com/florinpop17/app-ideas/blob/master/Projects/1-Beginner/Bin2Dec-App.md"
                }
            }',
            'committed_at' => \Carbon\Carbon::parse('2020-07-07T10:32:34Z')->toDateTimeString(),
        ]);

    }
}
