<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nft;

class NftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
        [
            [
              "titre" => "Monumental",
              "artiste"=> "galbarkan",
              "description"=> "3D digital artwork by Gal Barkan, Galaxy Eggs Genesis collection",
              "adresse"=> "https://superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed7f75fb9e0",
              "standard" => "ERC-721",
              "prix" => 1.236,
              "fichier" => "images/nft-01.jpg",
              "catégorie" => "collectible"
            ],
            [
              "titre" => "Dream Eater",
              "artiste" => "n8",
              "description" => "Adobe Medium, 3D scans, AI, C4D, Octane.  ",
              "adresse" => "https://superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed8f75fb9e0",
              "standard" => "ERC-721",
              "prix" => 2.5,
              "fichier" => "images/nft-02.jpg",
              "catégorie" => "collectible"
            ],
            [
              "titre" => "THE DIP",
              "artiste" => "bigcomic",
              "description" => "I fear no man, no beast, no evil, or DIP brother. When Hulk Hogan buys the dip. Digital painting",
              "adresse" => "https://superrare.com/address/0x895e2058bd2a5ecb659956954eced21151f96731",
              "standard" => "ERC-721",
              "prix" => 1.494,
              "fichier" => "images/nft-03.jpg",
              "catégorie" => "collectible"
            ],
            [
              "titre" => "LUPPY Bc#2384",
              "artiste" => "LUPPYNFTOFFICIAL",
              "description" => "LUPPY is a collection of 10,000 NFTs created by artists and web 3.0 enthusiasts living in Paris, Dubai and Japan. It is a unique digital collection on the Ethereum blockchain. LUPPY will bring its holders 'Luck' and 'Happiness' and also they will gain access to the membership community, get special gifts and information and participate in exclusive events. LUPPY will also launch a clothing brand and work on creating its own Metaverse in the near future.",
              "adresse" => "https://etherscan.io/address/0x495f947276749ce646f68ac8c248420045cb7b5e",
              "standard" => "ERC-1155",
              "prix" => 0.73,
              "fichier" => "images/nft-04.jpg",
              "catégorie" => "collectible"
            ],
            [
              "titre" => "PREMINT Collector Pass",
              "artiste" => "B52A42",
              "description" => "As a PREMINT Collector Pass holder, you will get access to an evolving collector dashboard and features to keep you on top of the hottest mints. For more info see https://collectors.premint.xyz/",
              "adresse" => "https://etherscan.io/address/0xe0176ba60efddb29cac5b15338c9962daee9de0c",
              "standard" => "ERC-721",
              "prix" => 0.294,
              "fichier" => "images/nft-05.jpg",
              "catégorie" => "utility"
            ],
            [
              "titre" => "#63057",
              "artiste" => "OthersideDeployer",
              "description" => "Otherdeed is the key to claiming land in Otherside. Each have a unique blend of environment and sediment — some with resources, some home to powerful artifacts. And on a very few, a Koda roams.",
              "adresse" => "https://etherscan.io/address/0x34d85c9cdeb23fa97cb08333b511ac86e1c4e258",
              "standard" => "ERC-721",
              "prix" => 1.09,
              "fichier" => "images/nft-06.jpg",
              "catégorie" => "metaverse"
            ],
            [
              "titre" => "Yokai Kingdom Genesis #5789",
              "artiste" => "YokaiKingdomTeam",
              "description" => "Yokai Kingdom is a web3 game universe, built on the Ethereum blockchain and inspired by rich, ancient Japanese mythology. 8,888 Genesis hero NFT trading cards is based on Oni (鬼), a fearsome yōkai spirit. Each is the key to unlock the Yokai Kingdom metaverse, including the tactical card game ONI’s QUEST",
              "adresse" => "https://etherscan.io/address/0x35b0ecc952cef736c12a7ef3a830f438f67912b3",
              "standard" => "ERC-721",
              "prix" => 0.0249,
              "fichier" => "images/nft-07.jpg",
              "catégorie" => "online video game"
            ],
            [
              "titre" => "Yokai Kingdom Genesis #4345",
              "artiste" => "YokaiKingdomTeam",
              "description" => "Yokai Kingdom is a web3 game universe, built on the Ethereum blockchain and inspired by rich, ancient Japanese mythology. 8,888 Genesis hero NFT trading cards is based on Oni (鬼), a fearsome yōkai spirit. Each is the key to unlock the Yokai Kingdom metaverse, including the tactical card game ONI’s QUEST",
              "adresse" => "https://etherscan.io/address/0x35b0ecc952cef736c12a7ef3a830f438f67912b4",
              "standard" => "ERC-721",
              "prix" => 0.1,
              "fichier" => "images/nft-08.jpg",
              "catégorie" => "online video game"
            ],
            [
              "titre" => "BoredApeYachtClub #6582",
              "artiste" => "Bored Ape Yacht Club",
              "description" => "",
              "adresse" => "https://etherscan.io/tx/0x999d620fb7a24cfa20a56c25eca894d438b63eb585f5874918feae3d42f6b133",
              "standard" => "ERC-721",
              "prix" => 60.5527,
              "fichier" => "images/nft-09.jpg",
              "catégorie" => "collectible"
            ],
            [
              "titre" => "Pigments #588",
              "artiste" => "Darien_Brito",
              "description" => "Pigments is an exploration of colour and spatial distortion. Each instance is an abstract representation aimed at evoking a micro or macro-environment; from unknown substances, or oil in a canvas, to nebular formations. The pieces are animated, meant to be experienced live. The piece can run endlessly, with infinite output. To run it smoothly you need a capable GPU. If this proves to be too computationally intensive, or if you prefer a static view, feel free to press the spacebar.",
              "adresse" => "https://etherscan.io/address/0xa7d8d9ef8d8ce8992df33d8b8cf4aebabd5bd270",
              "standard" => "ERC-721",
              "prix" => 3,
              "fichier" => "images/nft-10.jpg",
              "catégorie" => "collectible"
            ],
            [
              "titre" => "Droid AK0B61",
              "artiste" => "crea_st",
              "description" => "1/1 Edition. 2160 x 2700px",
              "adresse" => "https://superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed9f75fb9e0",
              "standard" => "ERC-721",
              "prix" => 0.652,
              "fichier" => "images/nft-11.jpg",
              "catégorie" => "collectible"
            ],
            [
              "titre" => "World #6090",
              "artiste" => "NFT Worlds",
              "description" => "NFT Worlds are generative worlds with geography, resource & feature data stored on chain. NFT Worlds can be played, explored and built in. You can sync changes you make to your world so they reflect on your NFT. Feel free to use NFT Worlds in any way you want. Learn more at nftworlds.com",
              "adresse" => "https://etherscan.io/address/0xbd4455da5929d5639ee098abfaa3241e9ae111af",
              "standard" => "ERC-721",
              "prix" => 500,
              "fichier" => "images/nft-12.jpg",
              "catégorie" => "metaverse"
            ],
            [
              "titre" => "Heart of London Deed (Ancient)",
              "artiste" => "0D24DE",
              "description" => "This Deed allows you to claim the Heart of London Land NFT in Legacy's one and only London Land drop. With only one available, the Heart of London is the unstoppable force in Legacy. Benefit from unrivalled influence!",
              "adresse" => "https://etherscan.io/address/0xbd4455da5929d5639ee098abfaa3231e9ae111af",
              "standard" => "ERC-1155",
              "prix" => 3,
              "fichier" => "images/nft-13.webp",
              "catégorie" => "online video game"
            ],
            [
              "titre" => "#0217",
              "artiste" => "Admit One",
              "description" => "Admit One is a 1,000 member private group of Web3 enthusiasts, builders, and thought leaders. The NFT acts as the entry ticket to this diverse and dynamic community. Do dope shit with dope people. To learn more please read the manifesto.",
              "adresse" => "https://etherscan.io/address/0xd2a077ec359d94e0a0b7e84435eacb40a67a817c",
              "standard" => "ERC-721",
              "prix" => 4.69,
              "fichier" => "images/nft-14.jpg",
              "catégorie" => "utility"
            ],
            [
              "titre" => "Global Pass",
              "artiste" => "ETHJETS",
              "description" => "Enjoy your entry into the world of private jet travel. The Global Pass is perfect for those who fly occasionally but still want to enjoy a taste of the perks of a frequent flyer.",
              "adresse" => "https://etherscan.io/address/0x7229600b699dd90b8e7be0575d02db58f409d2cb",
              "standard" => "ERC-1155",
              "prix" => 0.53,
              "fichier" => "images/nft-15.jpg",
              "catégorie" => "utility"
            ],

        ];

        foreach ($data as $nftData) {
            NFT::create([
                'title' => $nftData['titre'],
                'artist' => $nftData['artiste'],
                'description' => $nftData['description'],
                'contractUrl' => $nftData['adresse'],
                'token' => $nftData['standard'],
                'price' => $nftData['prix'],
                'image' => $nftData['fichier'],
                'category' => $nftData['catégorie'],
            ]);
        }
    }
}
