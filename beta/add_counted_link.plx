
use strict;
use warnings;

use CGI qw/:standard -nph *table/;

use DBIx::Abstract;
my $db = DBIx::Abstract->connect({driver=>'mysql', dbname=>'ibp', host=>'hooke.biosci.ohio-state.edu', user=>'devel', password=>'sFqprZCdYUzGjGbP'});

my $error_flag = 0;
my $response_msg = '';

sub response_msg_asHTML {
    return '' unless $response_msg;

    my $color = $error_flag ? 'red' : 'blue';
    return qq{<b style="color:$color">$response_msg</b>};
}

my $PAGE_TITLE = 'Register a Counted Link';

my $LINK_TABLE = 'redirection_links';

if (param()) {
    my $name = param('name');
    if (!$name) {
        $response_msg = 'Please specify a name for this link.';
        $error_flag++;
    }

    my $url = param('url');
    if (!$url) {
        $response_msg = 'You did not type a URL.';
        $error_flag++;
    }

    if ($error_flag) {
        show_form();
    }
    else {
        add_link($name, $url);
    }
}
else {
    show_form();
}

sub show_form {
    print header,
          start_html($PAGE_TITLE),
          h1($PAGE_TITLE),
          response_msg_asHTML(),
          start_form,
          start_table,
          Tr(td(['Link Name (page title):', textfield('name')])),
          Tr(td(['URL:',                    textfield('url' )])),
          Tr(td(['',                        submit('Submit' )])),
          end_table,
          end_form,
          end_html;
}

sub add_link {
    my ($name, $url) = @_;
    $db->insert($LINK_TABLE, {name=>$name, url=>$url});
    my $record = $db->select_one_to_hashref('id', $LINK_TABLE, {url=>$url});
    if (!$record) {
        $response_msg = 'Database lookup failed. (Failed to find the just added url.)';
        $error_flag++;
    }
    my $link = 'http://biology.osu.edu/count_hits.plx?link=' . $record->{id};
    $response_msg =  q{<p>Your link has been added successfully.</p>}
                  . qq{<p>Here the link that will count hits: $link</p>}
                  ;
    show_form();
}